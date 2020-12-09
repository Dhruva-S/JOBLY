<?php
include "config.php";
session_start();
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user_data where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            $_SESSION['password']=$password;

            $que = "Select * from user_data where username='".$uname."' and password='".$password."'";
            $res = mysqli_query($con,$que);
            $res1 = mysqli_fetch_array($res);
            $emailid = $res1['email'];
            $_SESSION['emailid']=$emailid;
            header('Location:profile.php');
        }else{
            header('Location:register.php');
        }

    }

}
?>

