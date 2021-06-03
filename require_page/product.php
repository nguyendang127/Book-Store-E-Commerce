<!-- novel book -->
<div class="small-container">
    <h2 class="title">Product</h2>
    <div class="row">
        <?php
        require "connect.php";

        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;
        $current_page = !empty($_GET['page'])?$_GET['page']:1;
        $offset = ($current_page - 1) * $item_per_page;    
        $sql = "SELECT * FROM product LIMIT ".$item_per_page." offset ".$offset."";
        $result = $con->query($sql);

        $totalRecords = mysqli_query($con,"select * from product");
        $totalRecords = $totalRecords -> num_rows;
        $totalPages = ceil($totalRecords/$item_per_page);


        // $rs = $con->query($sql);
        if ($result -> num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo '  
                <div class="col-4">
                  <a href="detail.php?&id='.$row["prod_id"].'"><img src="'.$row["prod_image"].'"</a>
                  <h4>'.$row["prod_name"].'</h4>
                  <p>'.$row["prod_price"].'$</p>
                </div>';
                  }
                }
          ?>
    </div>
    <div class="page-btn">
        <?php require "pagination.php"; ?>
        <span>&#8594;</span>
    </div>
</div>
