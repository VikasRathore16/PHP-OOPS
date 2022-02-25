<?php

namespace App;

/**
 * Product class
 */
class Product
{
    public int $id;
    public string $name;
    public string $image;
    public int $price;

    /**
     * constructor function
     *
     * @param integer $id
     * @param string $name
     * @param string $image
     * @param integer $price
     */
    public function __construct(int $id, string $name, string $image, int $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    /**
     * getProduct function
     *Displaying all products
     * @return void
     */
    public function getProducts()
    {
        $html = " <form action='operations.php?' method='GET'>
            <input type='hidden' name='Id' value=" . $this->id . ">
            <div class='product' name='" . $this->name . "'>
            <img src='images/" . $this->image . "' />
            <h3 class='title'><a href='' id='" . $this->id . "'>" . $this->name . "</a></h3>
            <span>Price: $" . $this->price . "</span>
            <a  class='add-to-cart' href='operations.php?id=$this->id&action=add' name='" . $this->id . "'>Add To Cart</a>
            </div>
            </form>";
        return $html;
    }
}
