<?php 
    session_start();
    $id = $_GET['id'];
    require "../connect.php";
    if(isset($id)){
        $check_account = "delete from account where account_name = '$id'";
        $res = mysqli_query($con, $check_account);
        echo "<script type='text/javascript'>alert('This account was deleted!'); location.href='user_account_manage.php'</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('This account was not exist in store!');</script>";
    }
?>