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

    <h1 class="heading">Steps in Making <span>Trash Bottles</span></h1>
    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/t1.png" alt="">
                <h4>Step<span> 1</span></h4>
                <h3>Gather Materials:</h3>
                <p>Collect clean and dry plastic bottles of various sizes. Any 
                    type of plastic bottle can be used, such as soda bottles, 
                    water bottles, or milk jugs.Collect non-recyclable waste 
                    materials such as plastic wrappers, packaging, bags, Styrofoam, 
                    or any other non-biodegradable waste.</p>
            </div>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/t2.png" alt="">
                <h4>Step<span> 2</span></h4>
                <h3>Prepare the Bottles:</h3>
                <p>Clean the plastic bottles thoroughly to remove any labels, 
                    dirt, or residue. Make sure they are completely dry before 
                    proceeding.</p>
            </div>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/t3.png" alt="">
                <h4>Step<span> 3</span></h4>
                <h3>Cutting and Compacting:</h3>
                <p>Use scissors or a craft knife to cut the non-recyclable waste 
                    materials into small pieces or shred them into manageable sizes.
                    Fill the plastic bottles tightly with the shredded waste materials, 
                    compacting them as much as possible to ensure they are densely packed.</p>
            </div>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/t4.png" alt="">
                <h4>Step<span> 4</span></h4>
                <h3>Compacting Tools:</h3>
                <p>Use a stick, rod, or dedicated compactor tool to press down and compact 
                    the waste materials inside the bottles firmly. This step is crucial for 
                    creating sturdy and durable trash bottles.</p>
            </div>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/t5.png" alt="">
                <h4>Step<span> 5</span></h4>
                <h3>Fill Completely:</h3>
                <p>Continue filling the bottles with shredded waste materials until 
                    they are completely full and tightly packed. Ensure there are no empty 
                    spaces or gaps inside the bottles.</p>
            </div>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/t6.png" alt="">
                <h4>Step<span> 6</span></h4>
                <h3>Seal the Bottles:</h3>
                <p>Once the bottles are filled with waste materials, securely cap them
                     with their original lids or with tightly fitting caps to prevent 
                     the contents from spilling out.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/t7.png" alt="">
                <h4>Step<span> 7</span></h4>
                <h3>Quality Control:</h3>
                <p>Inspect the trash bottles for any signs of leakage, bulging, or 
                    weakness. Ensure they are tightly sealed and structurally sound 
                    before using them for construction projects.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/t8.png" alt="">
                <h4>Step<span> 8</span></h4>
                <h3>Storage:</h3>
                <p>Store the completed trash bottles in a dry and secure location 
                    until they are ready to be used in construction projects. Protect 
                    them from moisture and physical damage to maintain their quality.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/t9.png" alt="">
                <h4>Step<span> 9</span></h4>
                <h3>Construction Use:</h3>
                <p>Incorporate the trash bottles into construction projects as building 
                    blocks or insulation materials. They can be used to construct walls, 
                    partitions, or other structural elements in buildings and structures.</p>
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