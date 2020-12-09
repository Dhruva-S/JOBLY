<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "freelance";
  //connect
  $con = mysqli_connect($host,$user,$password,$dbname);
  //check
  if($con){
      echo "";
  }
  else{
      die("Connection-Error: ".mysqli_connect_error());
  }
?>