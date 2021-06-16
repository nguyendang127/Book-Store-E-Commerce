<?php 
session_start();
require_once "connect.php";
        if ($con->connect_error) {
            die('Cannot Connection!');
        }
        $savepoint = $_SESSION['savepoint'];
        
        if (isset($_POST['submit'])) { // kiểm tra nếu người dùng đã submit thì đưa thông tin order lên db để admin quản lý

            $fullname = $_POST["firstname"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $phone = $_POST["phone"];

            $s = "insert into order_prod (order_prod_name, order_address, order_city, order_email, order_phone, order_time, order_savepoint) values ('$fullname', '$address', '$city','$email', '$phone', now(), '$savepoint')";
            

            
        
        $product = (isset($_SESSION['add_cart']))? $_SESSION['add_cart'] : [];
        
        mysqli_begin_transaction($con);   
        $result = mysqli_query($con, $s);
        $od_id = mysqli_insert_id($con);
        foreach($product as $key => $value):
        
            $name = $value['prod_name'];
            $price = $value['prod_price'];
            $quantity = $value['prod_quantity'];

         $p = "insert into order_detail (order_id, prod_name, prod_price, prod_quantity) values ( $od_id,'$name', '$price', '$quantity')";
         $result = mysqli_query($con, $p); 

        

        endforeach;
        mysqli_commit($con); 

        echo "<script>alert(' Your order is successful. Thanks for your purchase with us! ');location.href='index.php'</script>";
        unset($_SESSION['add_cart']);
    }
    ?>