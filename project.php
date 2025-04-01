<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EC's Task Projects</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- css file link -->
        <link rel="stylesheet" href="CSS/project.css">
        
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



<!-- Project Section Starts -->

<section class="task" id="task">

    <h1 class="heading">Our <span>Projects</span></h1>

    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/ecobricks.jpg" alt="">
                <h3>Bricks <span>Bottles</span></h3>
                <p>Plastic Bottle brick is a type of brick made of plastic 
                    bottles filled with compacted sand, plastics, or another 
                    type of non-organic material. It is used to construct 
                    houses and other structures.It is 100% dent-proof, but 
                    it is possible to crack or break the bricks plastic.</p>
            </div>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/ecopot.jpg" alt="">
                <h3>Pot <span>Bottles</span></h3>
                <p>Pot plastic is by cutting them open on the sides. This is 
                    a creative way to make a living wall. These planters are 
                    a fun garden upcycling idea to make with the kids in the 
                    summer. Cut down a Coke bottle to make a cute terrarium 
                    for your baby green plants.</p>
            </div>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/trashb.png" alt="">
                <h3>Trash <span>Bottles</span></h3>
                <p>A plastic trash can is a relatively cheap garbage can when 
                    you compare it with a stainless steel variant. Other than 
                    the price, a plastic trash can is lightweight and pretty 
                    easy to clean. It is 100% dent-proof, but it is possible 
                    to crack or break the bin’s plastic.</p>
            </div>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/ecohouse.jpg" alt="">
                <h3>House <span>Bottles</span></h3>
                <p>House bottle refers to a reusable water bottle kept or used 
                    within one's household or home environment. It's often used 
                    as a sustainable alternative to single-use plastic bottles, 
                    promoting eco-friendly practices and reducing plastic waste.
                    It is 100% dent-proof, but it is possible 
                    to crack or break the plastic.</p>
            </div>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/ecochair.jpg" alt="">
                <h3>Chair <span>Bottles</span></h3>
                <p>With a few simple tools and a bit of patience, you can easily 
                    turn plastic bottles into unique and stylish chairs for your 
                    home. Recycling is the process by which materials are recycled, 
                    while upcycling is the process by which materials are transformed 
                    into new things.</p>
            </div>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/trashcan.jpg" alt="">
                <h3>Table <span>Bottles</span></h3>
                <p>Table bottles this could be small bottles placed on tables, often 
                    containing condiments like ketchup, mustard, or salad dressing 
                    in restaurants or homes. These bottles are usually refillable 
                    and serve the purpose of providing easy access to various condiments 
                    during meals.</p>
            </div>
        </div>

    </div>

</section>

<!-- Project Section Ends -->



<!-- Gallery Section Starts-->

<section class="gallery" id="gallery">

    <h1 class="heading"> Our <span> Events </span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/event1.jpg">
            <div class="content">
                <h3>"Bottle Revival: Turning Trash into Treasures"</h3>
                <p>Come see how plastic bottles can become something amazing! 
                    At this event, you'll discover all the cool stuff made from 
                    recycled bottles. From colorful art to useful gadgets, learn 
                    how recycling helps the planet and get inspired to make a 
                    difference.</p>
                <a href="task.php" class="btn">Create Yours</a>
            </div>
        </div>
        <div class="box">
            <img src="images/event2.jpg">
            <div class="content">
                <h3>"Bottle Makeover: Giving Plastic New Life"</h3>
                <p>Ever wonder what happens to plastic bottles after you toss them 
                    away? Join us to find out! Explore how old bottles can become 
                    awesome new things, like toys and decorations. Meet people who 
                    care about our Earth and find out how we can all help by recycling.</p>
                <a href="task.php" class="btn">Create Yours</a>
            </div>
        </div>

    </div>

</section>

<!-- Gallery Section Ends-->


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

<a href="#project" class="fa-solid fa-angle-up" id="scroll"></a>

<!-- loader -->

<div class="loader-container">
    <img src="images/gif2.gif" alt="">
</div>




























  

    
    <!-- js file link -->
    <script src="Script/project.js"></script>
    <script src="Script/TTS.js"></script>
    <script src="Script/profile.js"></script>
</body>
</html>