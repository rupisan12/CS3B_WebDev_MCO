<?php
  session_start(); 
  //Detects if the user is log in or not.
  include_once "php/config.php";
  if (!isset($_SESSION["user_id"])) { //if the user isn't login or the user just redirect to home page, this will execute.
    header("location: login.php"); //This will throw the user back to log in page.
  } else { // else the user is log in then load the home page.
    $log_id = $_SESSION['user_id']; //Records the login
    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users_login WHERE user_id = $log_id")); //Fetch the user who is login.
  }
?>