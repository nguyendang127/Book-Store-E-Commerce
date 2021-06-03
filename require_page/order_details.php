<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logonew.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <title>Order management</title>
</head>
<body>
<h3><button><a href="order_manage.php">Back to </a></button></h3>
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <center><?php 
                                require "../connect.php";
                                $id=$_GET['id'];
                                $sql= "select order_prod_name from order_prod where order_id = $id";
                                $rs = $con->query($sql);
                                $row = $rs->fetch_assoc();
                                echo '<h2>'.$row['order_prod_name'].'</h2>';
                            ?></center>
                            <thead>
                                <tr>
                                    <!-- <th><em class="fa fa-cog"></em></th> -->
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $user_ord = "select * from order_detail where order_id = $id";
                                $rs = $con->query($user_ord);
                                    if ($rs -> num_rows > 0) {
                                        while($row = $rs->fetch_assoc()) {
                                            echo '
                                <tr>
                                    <td>'.$row['prod_name'].'</td>
                                    <td>'.$row['prod_price'].'</td>
                                    <td>'.$row['prod_quantity'].'</td>                        
                                </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>