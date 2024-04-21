<?php
session_start();
if (isset($_POST['submit'])) {
    require_once './connection.php';
    global $conn;
    
        $name = $conn->escape_string($_POST['name']);  
        $age = $conn->escape_string($_POST["age"]);
        $gender = $conn->escape_string($_POST["gender"]);
        $phone = $conn->escape_string($_POST["phone"]);
        $image = $conn->escape_string($_POST["image"]);
        

        
        $query = 'INSERT INTO emp(name,age,gender,phone,image)';
        $query .= "VALUES('$name', '$age','$gender','$phone','$image')";
    if($conn->query($query)){
        if (mysqli_affected_rows($conn)) {
            $_SESSION["empInsert"]="true";
            header('location:./index.php');
        } 
    }else {
        $_SESSION["empInsert"]="";
        echo $con->error;
    }
}
else{
    die('');
}