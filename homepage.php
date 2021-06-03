<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta charset="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HORIZONE | BOOKSTORE</title>
  <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
  <link rel="stylesheet" href="css/allcss.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: white">
<header>
  <?php 
  session_start();
  require "navigation_bar.php"; ?>
</header>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <h1>WELCOME BACK!!!</h1>
          <p>“All that mankind has done, through or been: it is lying as in magic preservation in the pages of book"</p>
        </div>
        <div class="col-2">
          <img src="image/horizon.png">
        </div>
      </div>
    </div>
  </div>
  
  <!-- features categories -->
  <?php include "require_page/newProduct.php" ?>
  
  <!-- all product -->
  <?php require "require_page/product.php"?>

  <!-- offer  -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="image/giai-ma-me-cung.png" class="offer-img">
        </div>
        <div class="col-2">
          <p>Now exclusively Available on HORIZONE</p>
          <h1>THE RUNNER MAZE</h1>
          <small>
            <p>The Maze Runner is a series of young adult dystopian science fiction novels written by American author James Dashner. The series consists of The Maze Runner (2009), The Scorch Trials (2010) and The Death Cure (2011), as well as two prequel novels, The Kill Order (2012) and The Fever Code (2016), a novella titled Crank Palace (2020),
             and a companion book titled The Maze Runner Files (2013)</p>
          </small>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <?php include "require_page/footer.php"; ?>
  </footer>

</body>

</html>