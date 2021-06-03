<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HORIZONE | ADMIN</title>
    <link rel="icon" href="logonew.jpg" type="image/x-icon">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <form class="form-horizontal" action="add_new.php" method="POST" enctype="multipart/form-data">
        <fieldset>

            <!-- Form Name -->
            <legend>
                <center>Fill on the filed to add new product</center>
            </legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
                <div class="col-md-4">
                    <input id="product_name" name="product_name" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="product_content" class="form-control input-md" required=""
                        type="text">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
                <div class="col-md-4">
                    <select id="product_categorie" name="product_categorie" class="form-control">
                        <option value="">Tap to select product category</option>
                        <option value="1">Novel</option>
                        <option value="2">Manga</option>
                        <option value="3">Self-help</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
                <div class="col-md-4">
                    <input id="available_quantity" name="available_quantity" 
                    class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">PRICE</label>
                <div class="col-md-4">
                    <input id="img" name="price" 
                    class="form-control input-md" type="text">
                </div>
            </div>
            <div class="form-group">
                <input type="file" name="up-file" style="margin: 0 0 0 28%"><br>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <input type="submit" id="singlebutton" name="submit" class="btn btn-primary" value="Confirm">
                </div>
            </div>

        </fieldset>
    </form>

</body>

</html>