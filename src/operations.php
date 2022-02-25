<?php

/**
 * using Namespace and calling vendor file
 */

use App\Cart;
use App\Product;

require_once "vendor/autoload.php";;
require('config.php');
session_start();

//Fetching
$action = (isset($_GET['action']) ? $_GET['action'] : '');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$quantity = (isset($_GET['value']) ? $_GET['value'] : '');

//declaring Session['cartItems'] array
if ($_SESSION['cartItems'] == false) {
    $_SESSION['cartItems'] = array();
}

switch ($action) {
    case "add":
        foreach ($Products as $arr => $product) {
            if ($id == $product['id']) {
                $cart = new Cart();
                $carrt = $_SESSION['cartItems'];
                $cart->setCart($carrt);
                $product = new Product($product["id"], $product["name"], $product["image"], $product["price"]);
                $cart->addToCart($product);
                $_SESSION['cartItems'] = ($cart->getCart());
            }
        }
        header("location: products.php");
        break;

    case "delete":
        $x = count($_SESSION['cartItems']);
        foreach ($_SESSION['cartItems'] as $key => $value) {

            if ($id == $value->id) {

                unset($_SESSION['cartItems'][$key]);
            }
        }
        $_SESSION['cartItems'] = array_values($_SESSION['cartItems']);
        $cart = new Cart();
        $carrt = $_SESSION['cartItems'];
        $cart->setCart($carrt);
        header("location: products.php");
        break;

    case "update":
        $x = count($_SESSION['cartItems']);
        foreach ($_SESSION['cartItems'] as $key => $value) {
            if ($id == $value->id) {
                $value->quantity = $quantity;
            }
        }
        $cart = new Cart();
        $carrt = $_SESSION['cartItems'];
        $cart->setCart($carrt);
        header("location: products.php");
        break;
};
