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
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        $query = 'INSERT INTO emp(name,age,gender,phone,image)';
        $query .= "VALUES('$name', '$age','$gender','$phone','$target_file')";
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