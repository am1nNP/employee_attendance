<?php
require_once 'connection.php';
function check_login($target="login.php"){
    if (!isset($_SESSION['userlogin'])) {
        header('location: '.$target);
        exit(1);
    }
}
