<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <title>Form complete order</title>
</head>

<body>

    <h2><center>Fill the form below to complete your order!</center></h2>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="finishpaid.php" method="POST">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Name" required>
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" required>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="Adress" required>
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="City" required>
                            <label for="city"><i class="fa fa-phone"></i> Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="Number phone" pattern="^0{1}[0-9]{9}" required>
                        </div>
                    </div>
                    <input name="submit" type="submit" value="SUBMIT" class="btn">
                </form>
            </div>
        </div>

        <div class="col-25">
            <div class="container">
                <?php session_start(); $ord = (isset($_SESSION['add_cart']))? $_SESSION['add_cart'] : []; ?>
                <a href="view_cart.php"><span><i class="fa fa-shopping-cart"></i> <b><?php echo count($ord) ?></b></span>
                <?php foreach($ord as $key => $value): ?>
                <p><a href="detail.php?&id=<?php echo $value['prod_id'] ?>"><?php echo $value['prod_name'] ?></a> <span class="price"><?php echo $value['prod_price'].'$'.' '.'x'.' '.$value['prod_quantity'] ?></span></p>
                <?php endforeach ?>
                <hr>
                </b></span></p>

                <p>Shipping <span class="price" style="color:black"><b>5$</b></span></p>
                <p>Total <span class="price" style="color:black"><b>
                
                <?php
                require_once "require_page/total_price.php";
                $tong = total_price($ord) + 5 ;
                echo $tong?>
                $</b></span></p>
                
            </div>
        </div>
    </div>

</body>

</html>