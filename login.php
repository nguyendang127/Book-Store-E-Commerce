<!-- login form -->

<?php
session_start();
require_once "connect.php";

if (isset($_POST['login'])) {

    $username = $_POST["account_name"];
    $passwd = md5($_POST["account_password"]);
    $user_check = "select * from account where account_name = '$username' && account_password = '$passwd' && account_type = 'user'";
    $admin_check = "select * from account where account_name = '$username' && account_password = '$passwd' && account_type = 'admin'";
      
    $result = mysqli_query($con, $user_check);
    $res = mysqli_query($con, $admin_check);
    
    $num = mysqli_num_rows($result); // thực hiện câu truy vấn đăng nhập với loại tài khoản là user
      
    switch($num){ // kiểm tra tài khoản có tồn tại không
        case "1":
            $_SESSION["account_name"] = $username;
            header("location: homepage.php");
            break;
        case "0": // nếu không tồn tại thì chuyển sang loại tài khoản admin 
            $num1 = mysqli_num_rows($res);
            if($num1 == 1){
                $_SESSION["account_name"] = 'Admin';
                header("location: admin.php");
            }
            else {
                $message = "Username or password is wrong! Please check again!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } // Nếu loại admin không có thì báo lỗi đăng nhập
            break;
        default:
        $message = "Username or password is wrong! Please check again!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

?>

<!-- registration form -->

<?php

    require_once "connect.php";

    if (isset($_POST['registration'])) {

    $username = $_POST["account_name"];
    $passwd = md5($_POST["account_password"]);
    $phone = $_POST["account_phone"];

    if($username == 'admin'){
        echo "<script type='text/javascript'>alert('You are not administrator');</script>";
    }
    else {
    $regis = "select * from account where account_name = '$username' && account_phone = '$phone' && account_type = 'user'";

    $result = mysqli_query($con, $regis);

    $num = mysqli_num_rows($result);

    if ($num == 1) {

    $message = "This account or phone number already exist, Please check it again!";
    echo "<script type='text/javascript'>alert('$message');</script>";

    } else {
    $reg = "insert into account (account_name, account_password, account_phone, account_type) values ('$username' , '$passwd' , '$phone', 'user')";
    mysqli_query($con, $reg);
    
    $ms = "Registration Successful";
    echo "<script>alert('$ms');</script>";
    }
    }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/allcss.css">
    <title>HORIZONE | LOGIN</title>
</head>

<body>

    <!-- account page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <a href="index.php"><img src="image/horizon.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>
                        <form action="" method="POST" id="loginForm">
                            <input type="text" name="account_name" placeholder="Username" required>
                            <input type="password" name="account_password" placeholder="Password" required>
                            <button name="login" class="btn">Login</button>
                        </form>
                        <form action="" method="POST" id="registerForm">
                            <input type="text" name="account_name" placeholder="Username" required>
                            <input type="password" name="account_password" placeholder="Password" required>
                            <input type="text" name="account_phone" placeholder="Phone number" pattern="^0{1}[0-9]{9}" required>
                            <button name="registration" class="btn">Register</button>
                            <!-- <a href="">Forgot password?</a> -->
                        </form>
                        <script src="js/formAccount.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include "require_page/footer.php" ?>
    </footer>
</body>

</html>