<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logonew.jpg" type="image/x-icon">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Edit product</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <h3><button><a href="../admin.php">Back to home</a></button></h3>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Update product</h1>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="table table-striped table-bordered table-list" method="POST">
                                <thead>
                                    <tr>
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
                                    <?php require "../connect.php";
                                $id = $_GET['id'];
                                $check_product = "select * from product inner join category on product.prod_category = category.cate_id where prod_id = $id";
                                $rs = $con->query($check_product);
                                    if ($rs -> num_rows > 0) {
                                        while($row = $rs->fetch_assoc()) {
                                            echo '
                                <tr>
                                    <td class="hidden-xs" style = "text-align: center;">'.$row['prod_id'].'</td>
                                    <td>'.$row['cate_name'].'</td>
                                    <td>'.$row['prod_name'].'</td>
                                    <td>'.$row['prod_content'].'</td>
                                    <td>'.$row['prod_price'].'$</td>
                                    <td>'.$row['prod_quantity'].' Item</td>
                                    <td><img src="../'.$row['prod_image'].'" width="60px"></td>
                                </tr>
                                ';
                            }
                        }
                    ?>
                                    <tr>
                                        <td class="hidden-xs"></td>
                                        <td class="hidden-xs" style="width: 110px">
                                            <select id="product_categorie" name="cate" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Novel</option>
                                                <option value="2">Manga</option>
                                                <option value="3">Self-help</option>
                                            </select>
                                        </td>
                                        <td class="hidden-xs"><input type="text" style="width: 100px" name="name"></td>
                                        <td class="hidden-xs"><input type="text" style="width: 220px" name="content"></td>
                                        <td class="hidden-xs"><input type="text" style="width: 100px" name="price"></td>
                                        <td class="hidden-xs"><input type="text" style="width: 100px" name="quantity"></td>
                                        <td class="hidden-xs"><input type="file" name="up-file" style="width: 95px"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" name="submit" value="Update" class="btn" style="background-color: green"> <b>UPDATE</b> </button>
                        </form>
                    <?php if(isset($_POST['submit'])){
                        $cate = $_POST['cate'];
                        $name = $_POST['name'];
                        $content = $_POST['content'];
                        $price = $_POST['price'];
                        $quantity = $_POST['quantity'];

                        if (($_FILES['up-file']['error'] == 0) &&
                        ($_FILES["up-file"]["type"] == "image/jpeg")) { 
                            move_uploaded_file($_FILES["up-file"]["tmp_name"],
                                "../image/product/" . $_FILES["up-file"]["name"]);
                            $img = "./image/product/" . $_FILES["up-file"]["name"];
                        }
                        else{
                        echo "Upload error: " . $_FILES['up-file']['error'];
                        }
        
                switch(isset($_POST['submit'])){
                    case $cate:
                        $sql = "update product set prod_category = '$cate' where prod_id = $id";
                        $rs = $con->query($sql);
                        echo "<script>alert('Your change is saved!');</script>";
                        break;
                    case $name:
                        $sql = "update product set prod_name = '$name' where prod_id = $id";
                        $rs = $con->query($sql);
                        echo "<script>alert('Your change is saved!');</script>";
                        break;
                    case $content:
                        $sql = "update product set prod_content = '$content' where prod_id = $id";
                        $rs = $con->query($sql);
                        echo "<script>alert('Your change is saved!');</script>";
                        break;
                    case $price:
                        $sql = "update product set prod_price = $price where prod_id = $id";
                        $rs = $con->query($sql);
                        echo "<script>alert('Your change is saved!');</script>";
                        break;
                    case $img:
                        $sql = "update product set prod_image = '$img' where prod_id = $id";
                        $rs = $con->query($sql);
                        echo "<script>alert('Your change is saved!');</script>";
                        break;
                    case $quantity:
                        $sql = "update detail set prod_quantity = $quantity where prod_id = $id";
                        $rs = $con->query($sql);    
                        echo "<script>alert('Your change is saved!');</script>";
                        break;
                    default:
                    echo "<script>alert('There is no row to change, please check it again!');</script>";
                }
            }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>