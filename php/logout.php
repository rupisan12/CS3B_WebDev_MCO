<?php
session_start();

if (isset($_SESSION["user_id"])) {
    include_once "config.php";
    $logout_id = $_GET['user_id'];
    if (isset($logout_id)) {
        session_unset();    
        session_destroy();
        header('location: ../login.php');
    }else {
        header("location: ../login.php");
    }
}


?>