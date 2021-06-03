<?php
    require "../connect.php";
    session_start();
    // session_unset();
    // die();
    $id = $_GET['id'];

    if(isset($_SESSION['add_cart'][$id])){
        // foreach($_SESSION['add_cart'][$id] as $key => $value):{

            $number = $_SESSION['number'];
            $reset_number = "update product set prod_quantity = (prod_quantity + $number) where prod_id = $id";
            $rs = $con -> query($reset_number);

            unset($_SESSION['add_cart'][$id]);
         
        // }       
        // endforeach;
        

    }

    header("location: ../view_cart.php");
?>