<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HORIZONE | BOOKSTORE</title>
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/cartpage.css">
    <link rel="stylesheet" href="css/allcss.css">
</head>

<body  style="background-color: white">
    <?php 
        session_start();
        require "navigation_bar.php";
	 	
             if(!isset($_SESSION['add_cart']) | $_SESSION['add_cart'] == []){
                echo "<script>alert('Your cart is empty! ');location.href='homepage.php'</script>";
            }            

             $cart = (isset($_SESSION['add_cart']))? $_SESSION['add_cart'] : [];    
            // echo "<pre>";
            // print_r($cart); 
	   ?>

    <h1>Shopping Cart</h1>

    <div class="shopping-cart">

        <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Subtotal</label>
        </div>

        <?php foreach($cart as $key => $value): ?>

        <div class="product">
            <div class="product-image">
                <img src="<?php echo $value['prod_image'] ?>">
            </div>
            <div class="product-details">
                <div class="product-title"><?php echo $value['prod_name'] ?></div>
            </div>
            <div class="product-price"><?php echo $value['prod_price'] ?></div>
            
            <div class="product-quantity">
                <div class=""><?php echo $value['prod_quantity'] ?></div>
            </div>
            <div class="product-removal">
                <a href="require_page/delete_item.php?&id=<?php echo $value['prod_id'] ?>"><button
                        class="remove-product" id="remove" name="remove">
                        Remove
                    </button></a>
            </div>
            <div class="product-line-price"><?php echo $value['prod_sub_price'] ?></div>
        </div>

        <?php endforeach ?>

        <div class="totals">
            <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal">
                    <?php
                        require_once "require_page/total_price.php";
                        echo total_price($cart);
                    ?>
                </div>
            </div>

        </div>

        <a href="checkout.php"><button type="submit" class="checkout" id="check">Check out</button></a>

    </div>
</body>

</html>