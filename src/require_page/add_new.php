
<?php 
session_start();

require "../connect.php";

    /* upload.php (pre-processing) */
  

    /* up sql */
        if (($_FILES['up-file']['error'] == 0) &&
        ($_FILES["up-file"]["type"] == "image/jpeg")) { 
            move_uploaded_file($_FILES["up-file"]["tmp_name"],
                "../image/product/" . $_FILES["up-file"]["name"]);
            $img = "./image/product/" . $_FILES["up-file"]["name"];
      
        $product_name = $_POST["product_name"];
        $product_content = $_POST["product_content"];
        $product_cate = $_POST["product_categorie"];
        $product_qual = $_POST["available_quantity"];
        $product_price = $_POST['price'];

        $sql = "insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) 
        values ('$product_cate', '$product_name', '$product_content', '$product_price', '$img','$product_qual')";
        
        $query = mysqli_query($con, $sql);
        }
        else{
        echo "Upload error: " . $_FILES['up-file']['error'];
        }
     
    
     echo "<script>alert(' Sucssesfully! ');location.href='../admin.php'</script>";      
?>