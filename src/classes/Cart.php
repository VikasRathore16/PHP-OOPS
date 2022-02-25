<?php

/**
 * Product class 
 */

class Cart
{

    public $cart;

    public function __construct()
    {
        $this->cart = array();
    }

    public  function addToCart(Product $product)
    {
        if (!$this->isExistsProduct($product)) {
            $product->quantity = 1;
            array_push($this->cart, $product);
        }
    }

    public function isExistsProduct(Product $product)
    {
        foreach ($this->cart as $key => $p) {
            if ($p->id == $product->id) {
                $this->cart[$key]->quantity += 1;
                return true;
            }
        }
        return false;
    }

    public  function setCart($carrt)
    {
        $this->cart = ($carrt);
    }
    public function getCart()
    {
        return $this->cart;
    }

    function displayCart()
    {
        $total = 0;
        $html = '<table style="width: 100%"><tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>per Item Price</th>
                    <th>Action</th>
                    <th>Id</th>
                    <th>Quantity</th>
                    </tr>';
        foreach ($this->cart as $key => $product) {
            $total += $product->quantity * $product->price;
            $html .= "<tr style='text-align:center'>
            <td>$product->name</td>
            <td>$ " . $product->quantity * $product->price . "</td>
            <td>$ $product->price </td>
            <input type='text' value=" . $product->id . " hidden>
            <td><a href=operations.php?id=$product->id&action=delete>Delete</a></td>
            <td>$product->id</td>
            <form action='operations.php?' method='get'>
            <input type='hidden' name='id' value=$product->id>
            <input type='hidden' name='action' value='update'>
            <td><input type='text' name='value'  onblur='form.submit()' value=$product->quantity></td>
            </form>";
            
            
        }
        $html.="</tr></table><h1>Final Price : $ $total</h1>";
        echo $html;
    }
}
