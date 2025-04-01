<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EC's Task Task</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- css file link -->  
        <link rel="stylesheet" href="CSS/task.css">  

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



<!-- Task Section Starts -->
                
<section class="task" id="task">

    <h1 class="heading">Your <span>Task</span></h1>

    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/ecobricks.jpg" alt="">
                <h3>Bricks <span>Bottles</span></h3>
                <p>Creating brick bottles using plastic and other waste materials is 
                    a unique way to recycle and repurpose trash while building sustainable 
                    structures. Here are the steps to make brick bottles using plastics 
                    and other garbage.</p>
            </div>
            <a href="start1.php" class="btn">craft it!</a>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/ecopot.jpg" alt="">
                <h3>Pot <span>Bottles</span></h3>
                <p>Creating "pot bottles" typically refers to using plastic bottles as 
                    plant pots for gardening. Here's how you can make pot bottles.</p>
            </div>
            <a href="start2.php" class="btn">craft it!</a>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/trashb.png" alt="">
                <h3>Trash <span>Bottles</span></h3>
                <p>Creating "trash bottles" typically involves using plastic bottles filled 
                    with non-recyclable waste materials to create eco-bricks, which can be 
                    used for various construction projects. Here are the steps to make trash 
                    bottles.</p>
            </div>
            <a href="start3.php" class="btn">craft it!</a>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/ecohouse.jpg" alt="">
                <h3>House <span>Bottles</span></h3>
                <p>Creating a house using bottles, also known as bottle construction or bottle 
                    building, is a unique and eco-friendly way to reuse materials and create 
                    sustainable structures. Here are the steps to make a house using bottles.</p>
            </div>
            <a href="start4.php" class="btn">craft it!</a>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/ecochair.jpg" alt="">
                <h3>Chair <span>Bottles</span></h3>
                <p>Creating a chair using bottles filled with plastics and steel bars is 
                    an innovative way to repurpose materials and create eco-friendly furniture. 
                    Here are the steps to make a chair using bottles filled with plastics 
                    and steel bars.</p>
            </div>
            <a href="start5.php" class="btn">craft it!</a>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/trashcan.jpg" alt="">
                <h3>Trashcan <span>Bottles</span></h3>
                <p>Creating a table using bottles is an innovative and eco-friendly way to 
                    repurpose materials and create unique furniture. Here are the steps to 
                    make a table using bottles.</p>
            </div>
            <a href="start6.php" class="btn">craft it!</a>
        </div>

    </div>

</section>

<!-- Task Section Ends -->


<!-- Footer Section Starts -->

<section class="container">

    <div class="share">
        <a href="https://www.facebook.com/profile.php?id=100091515372110&mibextid=JRoKGi"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/evad_alinay/?hl=en"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/daves_pic"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UC2gtw5nd7NQZFVzjIKBsuew"><i class="fab fa-youtube"></i></a>
    </div>

    <h1 class="credit">Created by <span>Team Greenomon</span> | all rights reserved! @2024</h1>

</section>

<!-- Footer Section Ends -->


<!-- Scroll Top Button -->

<a href="#task" class="fa-solid fa-angle-up" id="scroll"></a>


<!-- loader -->

<div class="loader-container">
    <img src="images/gif2.gif" alt="">
</div>



































    
    <!-- js file link -->
    <script src="Script/about.js"></script>
    <script src="Script/profile.js"></script>
</body>
</html>