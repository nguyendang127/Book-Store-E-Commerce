<?php 

session_start();
    require "connect.php";  //kết nối database

    if(isset($_POST['add'])){
        $_SESSION['number'] = $_POST['qual'];

        if(isset($_GET['id'])){        // kiểm tra id sản phẩm được add
        $id = $_GET['id'];
        $query = "SELECT * FROM product  WHERE prod_id = $id";
        $rs = $con->query($query);
            if ($rs -> num_rows > 0) {
                while($row = $rs->fetch_assoc()) {
            $item = [
                'prod_id'=>$row['prod_id'],
                'prod_name'=>$row['prod_name'],
                'prod_image'=>$row['prod_image'],
                'prod_cate'=>$row['prod_category'],
                'prod_price'=>round($row['prod_price']-$row['prod_price']*0.05),
                'prod_content'=>$row['prod_content'],
                'prod_quantity'=>$_SESSION['number'],
                'prod_qual'=>$row['prod_quantity'],
                'prod_sub_price'=>(round($row['prod_price']-$row['prod_price']*0.05) * $_SESSION['number'])
            ]; // đưa các giá trị của ID sản phẩm order vào 1 mảng để lấy dữ liệu order
        
            $remain = $row['prod_quantity'] - $_SESSION['number'];
                    if(isset($_SESSION['add_cart'][$id])){
                        echo "<script>alert(' You have added this product in your cart, please check it! ');location.href='detail.php?&id=$id'</script>";
                    } // kiểm tra nếu SP đã được thêm thì không được thêm nữa
                    else {
                            $_SESSION['add_cart'][$id] = $item;
                        }
                    }
        $query_update_quantity = "update product set prod_quantity = $remain where prod_id = $id";
        $res = $con -> query($query_update_quantity); // đặt lại giá trị của số lượng trong csdl

        echo "<script>alert(' This product added success! ');location.href='detail.php?&id=$id'</script>";
    }
        }
}
?>