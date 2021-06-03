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
    <title>User management</title>
</head>
<body>
<h3><button><a href="../admin.php">back to home</a></button></h3>
<div class="container">
        <div class="row">
            <h1 class="text-center">USER MANAGEMENT</h1>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <!-- <th><em class="fa fa-cog"></em>
                                    </th> -->
                                    <th class="hidden-xs">ID user</th>
                                    <th>User account</th>
                                    <th>Phone</th>
                                    <th>Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require "../connect.php";
                                $user_ord = "select * from account  where account_type = 'user'";
                                $rs = $con->query($user_ord);
                                    if ($rs -> num_rows > 0) {
                                        while($row = $rs->fetch_assoc()) {
                                            echo '
                                <tr>
                                    <td class="hidden-xs">'.$row['account_name'].'</td>
                                    <td>'.$row['account_name'].'</td>
                                    <td>'.$row['account_phone'].'</td>    
                                    <td>
                                     <a href="delete_account.php?&id='.$row['account_name'].'" class="btn btn-danger"><em class="fa fa-trash"></em></a>
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