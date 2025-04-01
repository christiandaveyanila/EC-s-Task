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

    <h1 class="heading">Steps in Making <span>Bricks Bottles</span></h1>
    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/b1.png" alt="">
                <h4>Step<span> 1</span></h4>
                <h3>Collect Waste Materials:</h3>
                <p>Gather plastic bottles and other waste materials 
                                such as plastic bags, wrappers, or non-recyclable 
                                plastics. Ensure the waste materials are clean 
                                and free from any organic matter.</p>
            </div>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/b2.png" alt="">
                <h4>Step<span> 2</span></h4>
                <h3>Prepare Waste Materials:</h3>
                <p>Clean the plastic bottles and other waste materials 
                                thoroughly to remove any dirt, labels, or residue. 
                                Cut the waste materials into small pieces to make easy 
                                for you to facilitate the mixing process</p>
            </div>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/b3.png" alt="">
                <h4>Step<span> 3</span></h4>
                <h3>Mixing:</h3>
                <p>In a large container or mixer, combine the chopped 
                                waste materials with a binding agent such as cement, 
                                mortar, or clay. The ratio of waste materials to binding 
                                agent can vary depending on the desired strength 
                                and consistency of the brick bottles.</p>
            </div>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/b4.png" alt="">
                <h4>Step<span> 4</span></h4>
                <h3>Forming Brick Bottles:</h3>
                <p>Once the mixture is thoroughly combined, fill clean and 
                                empty plastic bottles with the mixture. Pack the mixture 
                                tightly into the bottles to ensure the bricks are solid 
                                and uniform in shape.</p>
            </div>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/b5.png" alt="">
                <h4>Step<span> 5</span></h4>
                <h3>Compaction:</h3>
                <p>Use a tamper or compacting tool to compress the mixture
                                 inside the bottles firmly. This step helps to remove 
                                 air pockets and increase the density of the brick 
                                 bottles, making them stronger and more durable..</p>
            </div>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/b6.png" alt="">
                <h4>Step<span> 6</span></h4>
                <h3>Curing:</h3>
                <p>Allow the brick bottles to cure and dry in a cool, 
                                dry place for a period of time, typically several 
                                days to a week, depending on the weather conditions 
                                and the type of binding agent used. Curing helps the
                                 brick bottles to harden and solidify.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/b7.png" alt="">
                <h4>Step<span> 7</span></h4>
                <h3>Quality Control:</h3>
                <p>Inspect the brick bottles for any defects or inconsistencies. 
                                Ensure they are solid, uniform in size, and free from cracks 
                                or weak spots that could compromise their structural integrity.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/b8.png" alt="">
                <h4>Step<span> 8</span></h4>
                <h3>Storage:</h3>
                <p>Store the cured brick bottles in a dry and secure location 
                                until they are ready to be used in construction projects. 
                                Protect them from moisture and physical damage to maintain 
                                their quality.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/b9.png" alt="">
                <h4>Step<span> 9</span></h4>
                <h3>Construction:</h3>
                <p>Incorporate the brick bottles into construction projects 
                                as building blocks or insulation materials. They can be 
                                used to construct walls, partitions, or other structural 
                                elements in buildings and structures.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/b10.png" alt="">
                <h4>Step<span> 10</span></h4>
                <h3>Community Engagement:</h3>
                <p>Consider involving the local community in the process of 
                                making brick bottles. Organize workshops or educational 
                                programs to raise awareness about recycling and sustainable 
                                construction practices.</p>
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