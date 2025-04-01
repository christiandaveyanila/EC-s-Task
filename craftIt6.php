<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>EC's Task Craft It</title>


        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- css file link -->
        <link rel="stylesheet" type="text/css" href="CSS/craftit.css" />
        
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

        <div id="menu-bar" class="fas fa-bars"></div>



</header>

<!-- header section ends -->
<section class="task" id="task">
    <a href="task.php" class="btn"><i class="fa-solid fa-angle-left"></i> back </a>

    <h1 class="heading">Steps in Making <span>Trashcan Bottles</span></h1>
    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/tc1.png" alt="">
                <h4>Step<span> 1</span></h4>
                <h3>Gather Materials:</h3>
                <p>Collect plastic bottles and plastic wrappers. Make sure the 
                    bottles are clean and dry.</p>
            </div>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/tc2.png" alt="">
                <h4>Step<span> 2</span></h4>
                <h3>Prepare the Bottles:</h3>
                <p>Remove labels and caps from the plastic bottles. Clean the 
                    bottles thoroughly with soap and water. Let them dry completely.</p>
            </div>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/tc3.png" alt="">
                <h4>Step<span> 3</span></h4>
                <h3>Collect Plastic Wrappers:</h3>
                <p>Gather plastic wrappers from items such as snacks, candies, or other packaged goods. Make sure they are clean and dry.</p>
            </div>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/tc4.png" alt="">
                <h4>Step<span> 4</span></h4>
                <h3>Fill Bottles: </h3>
                <p>Stuff the plastic wrappers into the plastic bottles until they are tightly packed. This will provide structure and support to the trashcan.</p>
            </div>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/tc5.png" alt="">
                <h4>Step<span> 5</span></h4>
                <h3>Seal Bottles: </h3>
                <p>Once the bottles are filled with wrappers, seal them securely with their caps. You may want to use strong adhesive or tape to ensure they are tightly closed.</p>
            </div>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/tc6.png" alt="">
                <h4>Step<span> 6</span></h4>
                <h3>Arrange Bottles: </h3>
                <p>Arrange the filled bottles in a circular or rectangular shape, depending on the desired size and shape of your trashcan. You can stack them on top of each other or arrange them side by side.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/tc7.png" alt="">
                <h4>Step<span> 7</span></h4>
                <h3>Secure Bottles:</h3>
                <p> Use strong adhesive or tape to secure the bottles together, ensuring they stay in place and form a sturdy structure.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/tc8.png" alt="">
                <h4>Step<span> 8</span></h4>
                <h3>Finishing Touches:</h3>
                <p>If desired, you can decorate the outside of the trashcan with paint, stickers, or other embellishments to personalize it and make it more visually appealing.</p>
            </div>
        </div>




        
    </div>

</section>

<!-- home section starts -->


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

<a href="#task" class="fa-solid fa-angle-up" id="scroll"></a>


<!-- loader -->

<div class="loader-container">
    <img src="images/gif2.gif" alt="">
</div>































    
    <!-- js file link -->
    <script src="Script/index.js"></script>
    <script src="Script/profile.js"></script>
</body>
</html>