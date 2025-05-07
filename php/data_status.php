<?php
session_start();
include_once("config.php");

$orig_id = $_SESSION['user_id']; //Original Id of your login

$sql_list = mysqli_query($conn,"SELECT * FROM users_login WHERE user_id !='{$orig_id}'");

?>