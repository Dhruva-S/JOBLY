<?php


require('config.php');


extract($_POST);


$sql = "INSERT into feedback  VALUES('" . $name . "','" . $email . "','" . $username . "','" . $rating . "','" . $message . "')";


$success= $con->query($sql);


if (!$success) {

    die("Couldn't enter data: ");

}


echo ("<script LANGUAGE='JavaScript'>
                window.alert('Thanks for the feedback.We appreciate it.');
                window.location.href='profile.php';
                </script>");
$con->close();
?>