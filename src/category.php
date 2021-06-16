<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HORIZONE | PRODUCT</title>
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/allcss.css">
</head>

<body  style="background-color: white">
  
<?php 
session_start();
require_once "navigation_bar.php" ?>
   
    <div class="small-container">
        <?php
        require_once "connect.php";
        $id = $_GET['id'];
        $sql = "select cate_name from category where cate_id = $id";
        $rs = $con->query($sql);
        $row = $rs->fetch_assoc();
        ?>
        <h2 class="title">All <?php echo ucfirst($row["cate_name"])?> Products</h2>
        <div class="row">
            <?php
          require "connect.php"; 
             
          $sql = "SELECT * FROM product where prod_category = $id";
          $result = $con->query($sql);

              foreach($result as $row){
                echo '  
                  <div class="col-4">
                    <a href="detail.php?&id='.$row["prod_id"].'"><img src="'.$row["prod_image"].'"></a>
                    <h4>'.$row["prod_name"].'</h4>
                    <p>'.$row["prod_price"].'$</p>
                  </div>';
              }
            ?>
        </div>

    </div>

<?php require_once "require_page/footer.php" ?>

</body>

</html>