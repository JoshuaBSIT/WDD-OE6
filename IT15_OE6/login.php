<?php
require_once('connect.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login_query = "SELECT * from users WHERE email='$username' AND pass='$password' ";

    $result = @mysqli_query($dbc,$login_query);

    if(mysqli_num_rows($result)){
        echo "<script> alert('You are successfully login..')</script>";
        include("welcome.php");
        //echo "<script> window.open('welcome.php','_self')</script>";
        $_SESSION['email'] = $username;

    }
    else{
        echo "<script>alert('Email and password is incorrect!')</script>";
        include("login.html");
        exit;
    }
}

?>