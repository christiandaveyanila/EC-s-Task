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

    <h1 class="heading">Steps in Making <span>Pot Bottles</span></h1>
    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/p1.png" alt="">
                <h4>Step<span> 1</span></h4>
                <h3>Gather Materials:</h3>
                <p>Collect plastic bottles of various sizes. Any type of plastic 
                    bottle can be used, such as soda bottles, water bottles, or milk jugs.
                    Have a pair of scissors or a craft knife ready for cutting the bottles.</p>
            </div>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/p2.png" alt="">
                <h4>Step<span> 2</span></h4>
                <h3>Prepare the Bottles:</h3>
                <p>Clean the bottles thoroughly to remove any labels, dirt, or residue. 
                    Make sure they are completely dry before proceeding.</p>
            </div>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/p3.png" alt="">
                <h4>Step<span> 3</span></h4>
                <h3>Cutting:</h3>
                <p>Use scissors or a craft knife to cut the plastic bottles. The size of 
                    the opening will depend on the size of the plant you plan to grow. 
                    For smaller plants, you can cut closer to the top of the bottle, while 
                    larger plants may require cutting closer to the middle.</p>
            </div>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/p4.png" alt="">
                <h4>Step<span> 4</span></h4>
                <h3>Drainage Holes:</h3>
                <p>To ensure proper drainage and prevent waterlogging, make several small 
                    holes in the bottom of the bottle using a sharp object like a nail or awl. 
                    These holes will allow excess water to escape and prevent the soil 
                    from becoming waterlogged.</p>
            </div>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/p5.png" alt="">
                <h4>Step<span> 5</span></h4>
                <h3>Optional: Decorate:</h3>
                <p>If desired, you can decorate the outside of the plastic bottle pots
                     using paint, markers, or decorative tape. This step is entirely 
                     optional but can add a personal touch to your garden.</p>
            </div>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/p6.png" alt="">
                <h4>Step<span> 6</span></h4>
                <h3>Fill with Soil:</h3>
                <p>Fill the bottom of the bottle with a layer of small stones or 
                    pebbles to further aid drainage. Add potting soil into the bottle, 
                    leaving enough space for the plant's roots and watering.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/p7.png" alt="">
                <h4>Step<span> 7</span></h4>
                <h3>Planting:</h3>
                <p>Plant your chosen seeds or seedlings into the pot bottle, 
                    following the planting instructions for the specific plant 
                    you are growing. Water the soil thoroughly after planting 
                    to help settle the soil and hydrate the plant.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/p8.png" alt="">
                <h4>Step<span> 8</span></h4>
                <h3>Maintenance:</h3>
                <p>Place your pot bottles in an area with adequate sunlight 
                    and regularly water your plants as needed.Monitor the 
                    soil moisture levels and adjust your watering schedule 
                    accordingly.As your plants grow, you may need to transplant 
                    them into larger pot bottles or garden beds to provide more 
                    space for their roots.</p>
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