<?php
include('config.php');
session_start();
$email=$_SESSION['emailid'];
// echo $email;
$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
$select_db=mysqli_select_db($conn,'freelance') or die(mysqli_error($conn));

// $total="SELECT '$email_list' FROM subscriptions where ;";
$total= "SELECT email_list FROM subscriptions WHERE email_list='$email'";
$result=mysqli_query($conn,$total) or die(mysqli_error($conn));

if ($result->num_rows > 0) {
	// echo '<script>alert("You have already subscribed!")</script>';
	// header("profile.php");

	echo "<script>alert('You have already subscribed!');document.location='profile.php'</script>";
	}
else {
$res = $con->query("INSERT INTO subscriptions VALUES ('$email')") or die($con->error);
if($res){
	echo "<script>alert('You have successfully subscribed!');document.location='profile.php'</script>";
}
else echo "not successful!";
}
?>