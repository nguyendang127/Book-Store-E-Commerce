<?php 
    session_start();
    $id = $_GET['id'];
    require "../connect.php";
    if(isset($id)){
        $check_order = "delete from order_prod where order_id = $id";
        $res = mysqli_query($con, $check_order);
        $check_detail = "delete from order_detail where order_id = $id";
        $rs = mysqli_query($con, $check_detail);
        echo "<script type='text/javascript'>alert('This order was deleted!'); location.href='order_manage.php'</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('This order was not exist in store!');</script>";
    }
?>