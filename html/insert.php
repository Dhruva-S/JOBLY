<?php

$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
$select_db=mysqli_select_db($conn,'freelance') or die(mysqli_error($conn));

$total="SELECT MAX(project_id) FROM project_details;";
$result=mysqli_query($conn,$total) or die(mysqli_error($conn));
//if(!mysqli_num_rows($result)) $total=1;

$trend_rate; //Numbers from 1-7 assigned to each project based on the cost (highest cost has 7 rating and lowest has rating 1)
		if($result==true)
			{
				//echo "Successfully connectted!";
				$rows=mysqli_fetch_assoc($result);
				$total=$rows['MAX(project_id)'];
			}
		else echo "failed!";
if(isset($_POST['name']))
	$name=$_POST['name'];



if(isset($_POST['project_name']))
	$project_name=$_POST['project_name'];

if(isset($_POST['about']))
	$description=$_POST['about'];



if(isset($_POST['price_range']))
	$rate=$_POST['price_range'];

/*  JOB TITLE ASSIGNMENT */

$fullstack=0;
$backend=0;
$frontend=0;
$admin=0;

//Checking if frontend skills are required -html,css,javascript,bootstrap and angular or react JS

if((!empty( $_POST['html']))||(!empty($_POST['css']))||(!empty($_POST['bootstrap']))||(!empty($_POST['javascript']))||
	(!empty ($_POST['angularorreact'])))
{

	$frontend=1 ;
}

if((!empty( $_POST['php']))||(!empty($_POST['mysql']))||(!empty($_POST['nodejs']))||(!empty($_POST['expressjs']))||
	(!empty ($_POST['mongodb'])))
{

	$backend=1 ;
}

//checking if back-end skills are required-php,nodejs,mysql,mongodb,expressJS

//checking if full stack skills are required
if($frontend==1&&$backend==1)
{
	$fullstack=1;
}

//check if database admin is needed
if(!empty($_POST['admin']))
{
	$admin=1;
}

if($admin==1)
{
	$job_type="Database Admin";
}

elseif($fullstack==1)
	$job_type="Fullstack Developer";

elseif($backend==1)
	$job_type="Back-end Developer";

else $job_type="Front-end Developer";




/*      PRICE BRACKET OF PROJECT        */


if($rate=='major')
{
	$price_range=">₹10000000";
	$trend_rate=7;
}
elseif($rate=='verylarge')
{
	$price_range="₹5000000-₹10000000";
	$trend_rate=6;
}
elseif($rate=='larger')
{
	$price_range="₹100000-₹5000000";
	$trend_rate=5;
}
elseif($rate=='medium')
{
	$price_range="₹50000-₹100000";
	$trend_rate=4;
}
elseif($rate=='small')
{
	$price_range="₹20000-₹50000";
	$trend_rate=3;
}
elseif($rate=='simple')
{
	$price_range="₹5000-₹20000";
	$trend_rate=2;
}
else 
{
	$price_range="₹600-₹5000";
	$trend_rate=1;
}

$total=$total+1;
//INSERT THE JOB DETAILS ONTO THE DATABASE
$sql="INSERT into project_details VALUES ('$total','$name','$project_name','$description','$job_type','$price_range',-1,'','$trend_rate');";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if($result==true)
			{
				?>
				<script type="text/javascript">
					
					alert("Successfully posted your project!");
				</script>
				<?php
				echo "Successfully posted your project!";
			}


//SEND AN EMAIL TO SUBSCRIBERS ABOUT THIS JOB
// $newJobPid=$total;

//Now loop through the email of all the subscribers and send them an email abou this new job
$sql = "SELECT email_list FROM subscriptions";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    /***************************************************************************************/
        /* Sending email notification */
        //Email address of the receiver
        $to = $row['email_list'];
        //Email subject
        $subject = "Hey look out for the new job at JOBLY !";
        //Email message
        $message = "
        <html>
        <head> 
        Here is an interesting job from $name.
        </head>

        <body>
        <p><a href='http://localhost/COMPLETED_PROJECTS/Jobly-main/html/selectjob.php?pid=$total'>View the job</a></p>
        <body>
        </html>";
       
        

        //Header information
         $headers= "MIME-Version: 1.0\r\n";
         $headers.= "Content-type: text/html\r\n";
        //Header information
        $headers.= "From: Jobly <youremailid@gmail.com>\r\n";			//specify the email from which yow want to send your emails
        //Send email
        if(mail($to, $subject, $message, $headers))
           echo "Email sent successfully.";
        else
           echo "Unable to send the email.";
       /***************************************************************************************/
  }
} 
else {
  // echo "0 results";
}

mysqli_close($conn);

		header("location:profile.php");
?>

