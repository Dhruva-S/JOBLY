<?php session_start(); 

$pid=$_GET["pid"];

echo "<h1>";
echo $pid;
echo "</h1>";

?>

<?php 

$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
$select_db=mysqli_select_db($conn,'freelance') or die(mysqli_error($conn));
$x=$_SESSION["uname"];
//$sql="UPDATE project_details set assigned_status='1',assigned_to='$x' WHERE 'project_id'='$pid' ";
$sql="UPDATE `project_details` SET `assigned_status`='1',assigned_to='$x' where `project_id`='$pid' ";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

echo "<h1>";
echo $x;
echo "</h1>";

echo ("<script LANGUAGE='JavaScript'>
                window.alert('SUCCESSFULLY ASSIGNED JOB !!');
                window.location.href='profile.php';
                </script>");

	//Assigning the job to the user who takes up the job
		

?>