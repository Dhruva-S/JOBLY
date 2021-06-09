<!DOCTYPE html>
<html lang="en">
<head>
    <!-- S-s -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script 
        src="https://kit.fontawesome.com/5353301a4d.js" 
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../svg/main.png">
    <title>Sign Up</title>
</head>
<body>
    <?php require_once 'register_backend.php'; ?>
    <div class="container">
        <div class="forms-container">
            <div class="signup">
                <form action="register_backend.php" method="POST" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="" class="userFullName"  placeholder="Enter Username" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="userEmail"   placeholder="Enter Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required >
                    </div>
                    <label><input type="checkbox" onclick="myFunction()" autocomplete="off"  />Show Password</label>
                    <input type="submit" value="Register" class="btn solid" name="save">
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h1 >WELCOME!!</h1>
                    <h1>Welcome to the official JOBLY website</h1>
                    <button class="btn btn-dark " id="sign-up-btn" ><a href="login.php">sign in</a></button>
                </div>
            </form>  
                <img src="../svg/undraw_job_offers_kw5d.svg" alt="logo" class="image" >

            </div>
        </div>
    </div>
<script type="text/javascript">
   function myFunction() {
  const x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>
</html>