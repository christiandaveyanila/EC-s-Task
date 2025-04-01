
  <!DOCTYPE html>
  <html>
      <head>
          <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png" />
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
          <title>EC's Task Home</title>

          <!-- font awesome cdn link -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

          <!-- css file link -->
          <link rel="stylesheet" type="text/css" href="CSS/index.css" />
          
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
                echo "<a href='signupForm.php' class='btn'>SIGNUP</a>   <a href='loginForm.php' class='btn'>LOGIN</a>";
                }

                
            ?> 
        </div>  
            

          <div id="menu-bar" class="fas fa-bars"></div>


  </header>

  <!-- header section ends -->


  <!-- home section starts -->

  <section class="home" id="home">

      <div class="content">
          <h3>Environmental Conservation</h3>
          <p id="tell">"Explore the intersection of sustainability, 
            innovation, and action on our platform dedicated to environmental 
            conservation. Discover practical tips, insightful articles, and 
            inspiring stories that empower individuals and communities to 
            protect our planet for future generations. Join us in the journey 
            towards a greener, healthier world."</p>
              <div class="row">
              <select></select>
                <button><img src="icons/play.png" alt="">Listen</button>
              </div>
              
              
      </div> 
      <div class="image">
          <img src="images/home.png" >
      </div>

  </section>

  <!-- home section ends -->


  <!-- Footer Section Starts -->

  <div class="container">


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
      <script src="Script/index.js"></script>
      <script src="Script/TTS.js"></script>
      <script src="Script/profile.js"></script>
  </body>
  </html>

