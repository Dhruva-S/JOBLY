<?php


require('config.php');


extract($_POST);


$sql = "INSERT into feedback  VALUES('" . $name . "','" . $email . "','" . $username . "','" . $rating . "','" . $message . "')";


$success= $con->query($sql);


if (!$success) {

    die("Couldn't enter data: ");

}


echo "Thank You For Contacting Us ";
header('Location:profile.php');
$con->close();
?>