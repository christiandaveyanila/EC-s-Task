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

    <h1 class="heading">Steps in Making <span>Chair Bottles</span></h1>
    <div class="box-container">
<!-- first box -->
        <div class="box">
            <div class="content">
                <img src="images/c1.png" alt="">
                <h4>Step<span> 1</span></h4>
                <h3>Gather Materials:</h3>
                <p>Plastic bottles of various sizes, cleaned and dried thoroughly.
                    Non-recyclable plastic waste materials such as wrappers, packaging, 
                    bags, etc.Steel bars or rods for the frame of the chair.Tools 
                    such as scissors, a craft knife, a drill, screws, and a screwdriver.</p> 
            </div>
        </div>
<!-- second box -->
        <div class="box">
            <div class="content">
                <img src="images/c2.png" alt="">
                <h4>Step<span> 2</span></h4>
                <h3>Prepare the Plastic Bottles:</h3>
                <p>Clean the plastic bottles thoroughly to remove any labels, dirt, 
                    or residue. Ensure they are completely dry before use.Cut the 
                    bottom off each bottle to create a cylindrical shape. You can use 
                    scissors or a craft knife for this step.</p>
            </div>
        </div>
<!-- third box -->
        <div class="box">
            <div class="content">
                <img src="images/c3.png" alt="">
                <h4>Step<span> 3</span></h4>
                <h3>Fill Bottles with Plastics:</h3>
                <p>Fill the plastic bottles with shredded non-recyclable plastic 
                    waste materials. Compact the plastic waste tightly into the 
                    bottles to ensure they are densely packed.</p>
            </div>
        </div>
<!-- fourth box -->
        <div class="box">
            <div class="content">
                <img src="images/c4.png" alt="">
                <h4>Step<span> 4</span></h4>
                <h3>Insert Steel Bars:</h3>
                <p>Insert steel bars or rods into the filled bottles to provide 
                    structural support for the chair. These bars will serve as 
                    the legs and frame of the chair. Use a drill to create holes
                     in the bottles for inserting the steel bars. Ensure the bars 
                     are securely fitted into the bottles.</p>
            </div>
        </div>
<!-- fifth box -->
        <div class="box">
            <div class="content">
                <img src="images/c5.png" alt="">
                <h4>Step<span> 5</span></h4>
                <h3>Assemble the Chair Frame:</h3>
                <p>Arrange the bottles filled with plastics and steel bars to create 
                    the desired shape and size of the chair. The steel bars will 
                    form the legs and frame of the chair, while the filled bottles 
                    act as support and cushioning.</p>
            </div>
        </div>
<!-- sixth box -->
        <div class="box">
            <div class="content">
                <img src="images/c6.png" alt="">
                <h4>Step<span> 6</span></h4>
                <h3>Secure the Structure:</h3>
                <p>Use screws and a screwdriver to secure the bottles and steel 
                    bars together, ensuring they are tightly connected and stable. 
                    Add additional support if needed to reinforce the structure.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/c7.png" alt="">
                <h4>Step<span> 7</span></h4>
                <h3>Finishing Touches:</h3>
                <p>Once the frame of the chair is assembled, you can add additional 
                    features such as armrests or a backrest using additional bottles 
                    and steel bars. Decorate the chair as desired with paint, fabric, 
                    or other decorative materials to enhance its appearance.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/c8.png" alt="">
                <h4>Step<span> 8</span></h4>
                <h3>Testing and Adjustments:</h3>
                <p>Test the stability and durability of the chair by sitting on it 
                    and applying pressure to various parts of the structure.Make any 
                    necessary adjustments or reinforcements to ensure the chair is 
                    strong, stable, and comfortable.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <img src="images/c9.png" alt="">
                <h4>Step<span> 9</span></h4>
                <h3>Enjoy Your Eco-Friendly Chair:</h3>
                <p>Once the chair is completed and meets your satisfaction, place it in 
                    your desired location and enjoy using your unique and environmentally 
                    friendly furniture piece.</p>
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