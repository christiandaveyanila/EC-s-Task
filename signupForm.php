

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>EC's Task Signup</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- css file link -->
        <link rel="stylesheet" type="text/css" href="CSS/signupForm.css" />

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
                include("profile.php"); 
              } else {
                echo "<a href='loginForm.php' class='btn'><p>LOGIN</p></a>";
                }


            ?>  
            
            </div>
        
        <div id="menu-bar" class="fas fa-bars"></div>



</header>

<section class="home" id="home">
    <div class="content">
      
      <form action="process.php" method="POST">
        <h1>Sign Up</h1>
        <div class="container">
          <div class="input-box"> <!--fname-wrapper-->
            <div class="input-data"> <!--input-name-->
              <input type="text" name="signup_first_name" required>
              <div class="underlined"></div>
              <label for="">First Name</label>
            </div>
          </div>

          <div class="input-box">
            <div class="input-data">
              <input type="text" name="signup_middle_name" required>
              <div class="underlined"></div>
              <label for="">Middle Name</label>
            </div>
          </div>

          <div class="input-box">
            <div class="input-data">
              <input type="text" name="signup_family_name" required>
              <div class="underlined"></div>
              <label for="">Family Name</label>
            </div>
          </div>

          <div class="input-box">
            <div class="input-data">
                <input type="email" name="signup_email" required>
                <div class="underlined"></div>
                <label for="">Email</label>
            </div>
          </div>

          <div class="input-box">
            <label>Birthday:</label>
          </br>
            <input type="date" name="signup_bday" required>
          </div>

          <div class="input-box">
            <div class="gender">
              <label for="gender">Gender:</label>
            </br>
                <div class="inpt">
                    <input type="radio" value="Male" name="signup_gender" required>
                    <label for="Male">Male</label>
                    <input type="radio" value="Male" name="signup_gender" required>
                    <label for="Female">Female</label>
                    <input type="radio" value="Male" name="signup_gender" required>
                    <label for="Others">Others</label>
                </div>
            </div>
          </div>

          <div class="input-box">
            <div class="input-data">
              <input type="password" name="signup_password" required>
              <div class="underlined"></div>
              <label>Password</label>
            </div>
          </div>

          <div class="create-account">
            <button type="submit" name="signup_create">SIGNUP</button>
            <p>Already have an account?<a href="loginForm.php"><span>LOGIN</span></a></p>
          </div>
          <input type="hidden" name="signup_userType" value="user">
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


























    
    <!-- js file link -->
    <script src="Script/project.js"></script>
    <script src="Script/profile.js"></script>
</body>
</html>