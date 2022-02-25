<?php
error_reporting(0);
use App\Cart;
use App\Footer;
use App\Header;
use App\Product;

require_once "vendor/autoload.php";

require('config.php');
$header = new Header();
$footer = new Footer();
session_start();

?>
<!DOCTYPE html>
<html>


<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
	<!-- including header file -->
	<?php echo $header->header();?>
	<div id="main">
		<!-- Calling displayproduct function for displaying all products -->
		<div id='products'>
        <?php
        foreach($Products as $arr=>$product){
            $product1 = new Product($product["id"],$product["name"],$product["image"],$product["price"]);
            echo $product1->getProducts();
        } 
       ?>
       </div>
	
		<div id="table">
        <?php $cart= new Cart();
        $carrt = $_SESSION['cartItems'];
        $cart->setCart($carrt);
        $cart->displayCart();?>
		</div>
	</div>
		<!-- including footer file -->
	<?php echo $footer->footer();?>
</body>
</html>