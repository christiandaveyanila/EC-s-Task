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

    <h1 class="heading">Steps in Making <span>House Bottles</span></h1>
    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/h1.png" alt="">
                <h4>Step<span> 1</span></h4>
                <h3>Gather Materials:</h3>
                <p>Collect empty glass or plastic bottles of the same size and 
                    shape. Clear or colored bottles can be used depending on your 
                    preference.Other materials you'll need include cement or mortar, 
                    sand, gravel, reinforcement bars (rebar), wooden or metal frames 
                    for doors and windows, and roofing materials.</p>
            </div>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/h2.png" alt="">
                <h4>Step<span> 2</span></h4>
                <h3>Preparation:</h3>
                <p>Prepare the building site by clearing the area and ensuring it's
                    level and stable. Design your house plan, including the layout, 
                    dimensions, and placement of doors and windows. Consider factors 
                    such as sunlight, ventilation, and insulation.</p>
            </div>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/h3.png" alt="">
                <h4>Step<span> 3</span></h4>
                <h3>Foundation:</h3>
                <p>Dig trenches for the foundation according to your house plan.
                    Pour concrete into the trenches to create a solid foundation for 
                    the structure. Allow it to cure and harden.</p>
            </div>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/h4.png" alt="">
                <h4>Step<span> 4</span></h4>
                <h3>Frame Construction:</h3>
                <p>Construct wooden or metal frames for doors and windows according
                    to your design.Install the frames securely into the foundation.</p>
            </div>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/h5.png" alt="">
                <h4>Step<span> 5</span></h4>
                <h3>Bottle Walls:</h3>
                <p>Start by cleaning the bottles thoroughly to remove any labels or
                    residue.Arrange the bottles vertically or horizontally in rows, 
                    depending on your design and desired aesthetic.Use mortar or 
                    cement to secure the bottles together, creating a solid wall. Apply 
                    mortar between each bottle to ensure stability.Continue stacking and 
                    cementing bottles until the walls reach the desired height.</p>
            </div>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/h6.png" alt="">
                <h4>Step<span> 6</span></h4>
                <h3>Reinforcement:</h3>
                <p>To strengthen the walls, insert reinforcement bars (rebar) vertically 
                    and horizontally at regular intervals.Secure the rebar in place using 
                    wire or ties, and ensure it extends into the foundation for added stability.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/h7.png" alt="">
                <h4>Step<span> 7</span></h4>
                <h3>Roofing:</h3>
                <p>Construct a roof frame using wood or metal beams, following your 
                    house plan.Install roofing materials such as corrugated metal sheets, 
                     or other eco-friendly options to cover the roof and provide protection 
                     from the elements.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/h8.png" alt="">
                <h4>Step<span> 8</span></h4>
                <h3>Finishing Touches:</h3>
                <p>Plaster the interior and exterior walls to create a smooth finish.
                    Install doors and windows securely within the frames.
                    Apply any additional finishes or decorations as desired.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/h9.png" alt="">
                <h4>Step<span> 9</span></h4>
                <h3>Utilities:</h3>
                <p>Install plumbing, electrical wiring, and other utilities according 
                    to local building codes and regulations. Ensure proper insulation 
                    and ventilation to maintain comfort and energy efficiency.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/h10.png" alt="">
                <h4>Step<span> 10</span></h4>
                <h3>Completion:</h3>
                <p>Once construction is complete, conduct thorough inspections to 
                    ensure structural integrity and safety.Move into your eco-friendly 
                    bottle house and enjoy your unique and sustainable living space</p>
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