<!DOCTYPE html>

<html>

<head>

    <title>Feedback</title>
    <link rel="icon" href="../svg/main.png">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<!--</header>-->
			<script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			crossorigin="anonymous">
		</script>
		<script> 
		$(function(){
		$("#header").load("dashboard.php");  
		});
		</script> 
		</head>
</head>

<body>

<div id="header"></div>


<div class="container">

    <h1 class="text-info">Tell us how you feel.</h1>


    <form action="feedback_backend.php" method="POST">

        <div class="form-group">

            <label>Name:</label>

            <input type="text" name="name" class="form-control" required>

        </div>

        <div class="form-group">

            <label>Email:</label>

            <input type="email" name="email" class="form-control" required>

        </div>

        <div class="form-group">

        <label> Username </label>
    
        <input type="text" name="username" placeholder="Enter your Username" class="form-control" required>

        </div>

        <div class="form-group">

        <label>Rate our website on a scale of 1 to 5</label>
     
        <select name="rating" class="form-control" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>

        </div>

        <div class="form-group">

            <label>Message:</label>

            <textarea cols="100" rows="10" class="form-control" placeholder="Your comments" name="message" required></textarea>

        </div>

        <div class="form-group">

            <button class="btn btn-success" type="submit">Submit</button>

        </div>

    </form>

</div>


</body>

</html>