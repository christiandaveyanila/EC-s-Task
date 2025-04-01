<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>EC's Task Login</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- css file link -->
        <link rel="stylesheet" type="text/css" href="CSS/loginForm.css" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <!-- Iconscout Link For Icons -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        

    </head>
<body>
    
<!-- header section starts -->
<header>

          

<div class="fas fa-seedling " id="logo"> <label class="i">EC's Task</label></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="project.php">Project</a>
            <a href="task.php">Task</a>
            <a href="about.php">About Us</a>
        </nav>

        <div class="tap">
        <?php
              session_start();
              if(isset($_SESSION["user"]) && $_SESSION["user"] === true) {
                // User is not logged in, so show login and signup buttons
                include("profile.php"); 
              } else {
                // User is logged in, so hide login and signup buttons
                echo "<a href='signupForm.php' class='btn'>SIGNUP</a>";
                }

                
            ?> 
        </div>    
        
        
        <div id="menu-bar" class="fas fa-bars"></div>



</header>

<!-- header section ends -->
<?php session_start(); ?>


<!-- home section starts -->

<section class="home" id="home">

    <div class="content">

        <form id="loginForm" action="process.php" method="POST">

            <h1>Log <span>In</span></h1>
            <div class="container">        
                <div class="input-box" >
                    <div class="input-data">
                        <input type="email" name="login_email" required>
                        <div class="underlined"></div>
                        <label for="">Email</label>
                    </div>
                </div> 
            
                <div class="input-box">
                    <div class="input-data">
                        <input type="password" name="login_password" required>
                        <div class="underlined"></div>
                        <label>Password</label>
                    </div>
                </div>
            
                <div class="forget">
                    <label for=""><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
            
                <div class="login">
                    <button class="login-button" type="submit" name="form_login">LOGIN</button>
                    <p>Don't have an Account? <a href="signupForm.php">SIGNUP</a></p>
                </div>    

            </div>
        </form>
    </div>

    <div class="image">
        <img src="images/home.png" alt="" >
    </div>
    
</section>

<!-- home section ends -->


<!-- Footer Section Starts -->

<div class="container1">

    <div class="share">
        <a href="https://www.facebook.com/profile.php?id=100091515372110&mibextid=JRoKGi"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/evad_alinay/?hl=en"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/daves_pic"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UC2gtw5nd7NQZFVzjIKBsuew"><i class="fab fa-youtube"></i></a>
    </div>

    <h1 class="credit">Created by <span>Team Greenomon</span> | all rights reserved! @2024</h1>

</div>

<!-- Footer Section Ends -->


<!-- Scroll Top Button -->

<a href="#home" class="fa-solid fa-angle-up" id="scroll"></a>


<!-- loader -->

<div class="loader-container">
    <img src="images/gif2.gif" alt="">
</div>


















  <script src="Script/about.js"></script>
    <script src="Script/profile.js"></script>
    <script src="Script/index1.js"></script>
</body>
</html>