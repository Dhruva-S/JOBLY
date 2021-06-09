<!-- Store the signup details in the database and send an email to the user notifying that he has registered for the website -->
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

        /***************************************************************************************/
        /* Sending email notification */
        //Email address of the receiver
        $to = $email;
        //Email subject
        $subject = "Welcome to JOBLY";
        //Email message
        $message = "
        <html>
        <head> 
        You were successfully pranked from the JOBLY website.
        </head>

        <body>
        <p>Hey $username ,<p> 
        <p>Looking for a job? Or want to hire someone for your job? </p>
        <p>JOBLY is your answer. </p>
        <p>Check out the <a href='http://localhost/COMPLETED_PROJECTS/Jobly-main/html/job_post.html'>Search for jobs</a> section if you are looking for jobs.</p>
        <p>Check out the <a href='http://localhost/COMPLETED_PROJECTS/Jobly-main/html/searchjobs.php'>Post jobs</a> section if you want to hire someone.</p>
        <p>Thanks,JOBLY team.</p>
        <body>
        </html>";
       
        

        //Header information
         $headers= "MIME-Version: 1.0\r\n";
         $headers.= "Content-type: text/html\r\n";
        //Header information
        $headers.= "From: Jobly <youremailid@gmail.com>\r\n";                      //Your email id from which you want to send the emails  to the subscribers
        //Send email
        if(mail($to, $subject, $message, $headers))
           echo "Email sent successfully.";
        else
           echo "Unable to send the email.";
       /***************************************************************************************/




    if($res){
    header('location:login.php');
    }else{
    header('location:register.php');
    }
        
    }
    
?>


