<?php
session_start();
require_once './connection.php';
global $conn;
$id=$_GET['id'];

$sql = "DELETE FROM emp WHERE id='$id'";
if ($conn->query($sql)) {
    $_SESSION["empDelete"]="true";
    header('location:./index.php');

    }else {
        $_SESSION["empDelete"]="";
        echo $con->error;
        $conn->close();
    }
        

