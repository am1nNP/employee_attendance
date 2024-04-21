<?php
session_start();
if(isset($_POST['submit'])){
    require_once './connection.php';
    global $conn;
    $username = $conn->escape_string($_POST["username"]);
    $password = $_POST["password"];

    $query = "SELECT * FROM user_admin WHERE username='$username' AND password='$password'";

    if($result = $conn->query($query)){
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['userlogin'] = $row['username'];
            $_SESSION['userlevel'] = $row['present'];
            $_SESSION['userid']=$row['id'];
            header('location: ./index.php');
        }
        else {
            $_SESSION['notfound']='نام کاربری یا رمز عبور اشتباه است';
            header('location: ./login.php');
        }
    }
    else {
        $_SESSION['notfound']='اختلالی در انجام ارسال درخواست به سرور رخ داده است';
        header('location: ./login.php');
    }

}

