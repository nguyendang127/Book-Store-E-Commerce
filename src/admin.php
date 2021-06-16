<?php 

session_start();
include "connect.php";

if (isset($_SESSION['account_name'])) {
    $temp = $_SESSION['account_name'];
    $sql ="SELECT account_type from account where account_name ='$temp'";
    $rs = $con->query($sql);
    $row = mysqli_fetch_array($rs);
    if($row){
        if($row[0] == "admin"){
            header("location: admin.php");        
        }else{
            header("location: index.php");
        }
    }
}else{
    header("location: index.php");
} // kiểm tra đăng nhập

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <title>HORIZONE | ADMIN</title>
</head>

<body>
    <?php echo "<h4>Welcome " . $_SESSION['account_name'] . "</h4>"; ?>
    <span>
        <ul>
            <li><button><a href="require_page/order_manage.php">ORDER MANAGEMENT</a></button></li>
            <li><button><a href="require_page/user_account_manage.php">USER MANAGEMENT</a></button></li>
            <li><button><a href="logout.php">LOG OUT</a></button></li>
        </ul>
    </span>
    <div class="container">
        <div class="row">
            <h1 class="text-center">PRODUCT MANAGEMENT</h1>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">List of product</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href="./require_page/add_new_product.php"><button type="button"
                                        class="btn btn-sm btn-primary btn-create">Add new product</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th><em class="fa fa-cog"></em>
                                    </th>
                                    <th class="hidden-xs">ID product</th>
                                    <th>Categories</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require "connect.php";

                                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                                $current_page = !empty($_GET['page'])?$_GET['page']:1;
                                $offset = ($current_page - 1) * $item_per_page; 

                                $product = "SELECT * FROM product inner join category on category.cate_id= product.prod_category LIMIT ".$item_per_page." offset ".$offset."";
                                $rs = $con->query($product);

                                $totalRecords = mysqli_query($con,"SELECT * FROM product");
                                $totalRecords = $totalRecords -> num_rows;
                                $totalPages = ceil($totalRecords/$item_per_page);

                                    if ($rs -> num_rows > 0) {
                                        while($row = $rs->fetch_assoc()) {
                                            echo '
                                <tr>
                                    <td align="center">
                                    <a href="./require_page/edit_product.php?&id='.$row['prod_id'].'" class="btn btn-default"><em class="fa fa-pencil"></em></a> 
                                    <a href="./require_page/delete_product.php?&id='.$row['prod_id'].'" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                    <td class="hidden-xs">'.$row['prod_id'].'</td>
                                    <td>'.$row['cate_name'].'</td>
                                    <td>'.$row['prod_name'].'</td>
                                    <td>'.$row['prod_content'].'</td>
                                    <td>'.$row['prod_price'].'$</td>
                                    <td>'.$row['prod_quantity'].' item</td>
                                    <td><img src="'.$row['prod_image'].'" width="60px"></td>
                                </tr>';
                                        }
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                            <?php 
                                require_once "require_page/pagination.php"
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>