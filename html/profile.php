
<?php
  session_start();
  $userProfileName = $_SESSION['uname'];
   //check
  if(isset($userProfileName)){

  }else{
       //back to login page
      header("location:login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>

    


  <title>Profile </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!--------------------------------- NAVBAR------------------------->
 <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="../svg/main.png">
    <link rel="stylesheet" href="../css/dashboard.css">

    
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<script> 
$(function(){
  $("#header").load("profile_navbar.php");  
});

</script> <div id="header">


    </header>

</div>


</head>
<body>
 
<div class="container-fluid">
  <div class="row">

    <!----------------------------------PROFILE DIVISION ------------------------------------------------------>
    <div style="align:center;" class="col-md-4">
  <h1>Profile</h1>
  <!--<p>Image at the top (card-img-top):</p>-->
  <div class="card" style="width:350px">
    <img class="card-img-top" src="../svg/profile1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <!--<h4 class="card-title"><?php echo $userProfileName; ?></h4>-->
      <p class="card-text">
        
        <ul class="list-group">
  <li class="list-group-item" style="text-align: center;"><h3><Strong>Name:</Strong><?php echo " ".$userProfileName; ?></h3></li>
  <li class="list-group-item" style="text-align: center;"><h3><Strong>Email-id:</Strong><?php echo " ".$_SESSION['emailid']; ?></h3></li>


      </p>
      <!--<a href="#" class="btn btn-primary">See Profile</a>-->
    </div>
  </div>
</div>







 <!----------------------------------LIST OF JOBS DIVISION  ----------------------------------------------------->

<div class="col-md-6">
  <h1 style="text-align: center">List of Jobs taken up</h1>

        <table class="table table-striped table-hover responsive">
        <tr class="text-info">
        <th >Name</th>
        <th >Job Type</th>
        <th >Price Range</th>
        <th >View Full Job</th>
        <!-- (Higher the trend rate,more the trend for this project) -->
        </tr>
        <?php

        $conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
        $select_db=mysqli_select_db($conn,'freelance') or die(mysqli_error($conn));

$sql="SELECT project_id,name,job_type,price_range FROM project_details where assigned_to='$userProfileName';";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));


    if($result==true)
      {         
      //$i=0; 
      
            while($rows=mysqli_fetch_assoc($result))
              {
                $name=$rows['name'];
                $pid=$rows['project_id'];
                //A restriction can be set here for the number of people who submit the forms
                $job_type=$rows['job_type'];
                $price_range=$rows['price_range'];
                //$trend_rate=$rows['trend_rate'];
        ?>        
                <?php 
                echo '<tr>'; ?>
                
                
                <td ><?php echo $name ;?></td>
                <td ><?php echo $job_type ;?></td>
                <td ><?php echo $price_range ;?></td>
                
                <?php echo "<td><a href=selectjob.php?pid=",$pid,">View</a></td>";?>
                <!--<td><a href="selectjob.php?pid=">View </a></td>-->
                </tr>
                
                <?php
              }
      }
      
                ?> 
  </table>

</div>




 <!----------------------------------LOGOUT DIVISION------------------------------------------------->

<!--
<div class="col-sm-2">
  <div class="container text-white text-center bg-dark py-5 ">
    -->  <!--<h2><?php //echo "&#9786; Hello " .$userProfileName; ?></h2>-->
     <!-- <h2><?php //echo " Hello " .$userProfileName; ?></h2>
      <a class="btn btn-secondary mt-2" href="login.php">logout</a> 
</div>
</div>
-->
</div>

</div>

</body>
</html>