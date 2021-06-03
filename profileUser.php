<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logonew.jpg" type="image/x-icon">
    <title>HORIZONE | Your Profile</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Your information</h1>
        <div class="sub-container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">

                        <div class="profile-userpic"> <img
                                src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_user_profile/images/profile_user.jpg"
                                class="img-responsive" alt="Thông tin cá nhân">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> <?php session_start(); 
                            if(isset($_SESSION['account_name'])){
                                echo $_SESSION['account_name'];
                            }
                            else {
                                header("location: index.php");
                            }
                            ?> </div>
                            <div class="profile-usertitle-job"> Member </div>
                        </div>
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm"><a href="index.php">Home</a></button>
                            <button type="button" class="btn btn-danger btn-sm"><a href="logout.php">Logout</a></button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    body {
        background: #F1F3FA;
    }
    h1{
        text-align: center;
    }
    
    .container{
        width: 40%;
        height: 50%;
        margin: 3% 0 0 30%;
    }


    .profile {
        margin: 20px 0;
    }

    .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
    }


    .profile-userpic img {
        float: none;
        margin: 0 0 0 34%;
        width: 30%;
        height: 30%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
    }


    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }


    .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
    }


    .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
    }


    .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
    }


    .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
    }

    .profile-userbuttons .btn a {
        text-decoration: none;
        color: white;
    }

    .profile-userbuttons .btn:last-child {
        margin-right: 0px;
    }

    .btn-success{
        background-color: green;
    }
    .btn-danger{
        background-color: red;
    }


    .profile-content {
        padding: 20px;
        background: #fff;
        min-height: 460px;
    }
    </style>

</body>

</html>