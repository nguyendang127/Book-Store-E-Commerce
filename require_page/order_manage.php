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
<h3><button><a href="../admin.php">Back to home</a></button></h3>
<div class="container">
        <div class="row">
            <h1 class="text-center">ORDER MANAGEMENT</h1>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <!-- <th><em class="fa fa-cog"></em></th> -->
                                    <th>Full Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Time order</th>
                                    <th>Details</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require "../connect.php";
                                $user_ord = "select * from order_prod order by order_id DESC";
                                $rs = $con->query($user_ord);
                                    if ($rs -> num_rows > 0) {
                                        while($row = $rs->fetch_assoc()) {
                                            echo '
                                <tr>
                                    <td>'.$row['order_prod_name'].'</td>
                                    <td>'.$row['order_address'].'</td>
                                    <td>'.$row['order_city'].'</td>
                                    <td>'.$row['order_email'].'</td>
                                    <td>'.$row['order_phone'].'</td>
                                    <td>'.$row['order_time'].'</td>
                                    <td><a href="order_details.php?id='.$row['order_id'].'">view</a></td>
                                    <td> 
                                        <a href="delete_order.php?&id='.$row['order_id'].'" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                                
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