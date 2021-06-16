<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/allcss.css">
    <title>HORIZONE | BOOKSTORE</title>
</head>

<body  style="background-color: white">
    <?php
        session_start();
        require "connect.php";
        require "navigation_bar.php";
        $output ='';

        //collect
        if (isset($_POST['submit'])){
            $searchq = $_POST['search-data'];
            $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
            $query = "SELECT * FROM product inner join category on category.cate_id = product.prod_category  WHERE cate_name LIKE '%$searchq%' 
                                                OR prod_name LIKE '%$searchq%'";
            $rs = $con->query($query);
                $count = mysqli_num_rows($rs);
                    if($count == 0){
                        $output = 'There was no search results!';
                        echo "<h3><center>$output</center></h3>";
                    }
                    
                    else {
                        echo '<h1><center>Search result for : "'.$_POST['search-data'].'"</center></h1>';
                        ?>
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products for search :</h2>
        </div>
        <div class="row">
            <?php
                        while($row = $rs->fetch_assoc()) {   
                            echo '
                                    <div class="col-4">
                                        <a href="detail.php?&id='.$row["prod_id"].'"><img src="'.$row["prod_image"].'"></a>
                                            <h4>'.$row["prod_name"].'</h4>
                                                <p>'.$row["prod_price"].'$</p>
                                    </div>
                        ';
                       
            }
        }
    }
?>
        </div>
    </div>
    <?php require "require_page/footer.php" ?>
</body>

</html>