<?php
session_start();
require_once './connection.php';
global $conn;
$id=$_GET['id'];

$sql = "DELETE FROM attendance WHERE id='$id'";
if ($conn->query($sql)) {
    $_SESSION["empSetDelete"]="true";
    header('location:./index.php');

    }else {
        $_SESSION["empSetDelete"]="";
        echo $con->error;
        $conn->close();
    }
        

