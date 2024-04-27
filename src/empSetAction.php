<?php
session_start();
if (isset($_POST['submit'])) {
    require_once './connection.php';
    global $conn;
    
        $date = $conn->escape_string($_POST['date']);  
        $time = $conn->escape_string($_POST["time"]);
        $emp_id = $conn->escape_string($_POST["emp_id"]);
        $present = $conn->escape_string($_POST["option"]);


        $query = 'INSERT INTO attendance(date,time,emp_id,present)';
        $query .= "VALUES('$date', '$time','$emp_id','$present')";
    if($conn->query($query)){
        if (mysqli_affected_rows($conn)) {
            $_SESSION["empSet"]="true";
            header('location:./index.php');
        } 
    }else {
        $_SESSION["empSet"]="";
        echo $con->error;
    }
}
else{
    die('');
}