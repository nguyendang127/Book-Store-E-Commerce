<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/allcss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>HORIZONE | DETAIL PRODUCT</title>
</head>

<body  style="background-color: white">
    <header>
        <?php 
        session_start();
        require "navigation_bar.php"; ?>
    </header>

    <!-- detail product -->
    <div class="small-container single-product">
        <?php
        require "connect.php";

        $id = $_GET["id"];

        if(isset($id)){
            
        $productdetail = "SELECT * FROM product  WHERE prod_id = $id";
            
        $rs = $con->query($productdetail);
    
            if ($rs -> num_rows > 0) {
                while($row = $rs->fetch_assoc()) { // hiển thị thông tin sản phẩm mà người dùng muốn xem
                    echo '
        <div class="row">
            <div class="col-2">
                <img src="'.$row["prod_image"].'" width="100%" id="productImg">
            </div>
            
            <div class="col-2">
            <form action="add_cart.php?&id='.$row['prod_id'].'" method="POST">
                <p>'.$row["prod_category"].' / ID: '.$row["prod_id"].'</p>
                <h1>'.$row["prod_name"].'</h1>
                <h4>'.$row["prod_price"].'$</h4>
                <h4>Remaining <strong>'.$row["prod_quantity"].'</strong> product in store.</h4>
                <input type="number" value="1" min="1" max="'.$row["prod_quantity"].'" name="qual">
                <button type="submit" name="add">ADD TO CART</button>     
                <h3>Flot</i></h3>
                <br>
                <p>'.$row["prod_content"].'</p>
            </form>    
            </div>

        </div>
                '; 
            }
        }
    }
        ?>

    </div>

    <!-- footer -->
    <footer><?php include "require_page/footer.php" ?></footer>
    <!-- include JS code -->
</body>

</html>