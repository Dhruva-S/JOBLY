<?php
    
session_start();
include('config.php');

    $name = '';
    $username = '';

    if(isset($_POST['save'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    $res = $con->query("INSERT INTO user_data (username , email , password) VALUES ('$username','$email','$password')") or die($con->error);
    if($res){
    header('location:login.php');
    }else{
    header('location:register.php');
    }
        
    }
    
?>