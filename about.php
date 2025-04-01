<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EC's Task About</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- css file link -->
        <link rel="stylesheet" href="CSS/about.css">  

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



<!-- About Section Starts -->


<section class="about" id="about">
    <div class="content">
        <h1 class="heading">About <span>Us</span></h1>  
        <a href="index.html" class="logo"><i class="fas fa-seedling"></i>EC's Task </a>
        <h3>Environmental Conservation System Task</h3>
        <p>"At Environmental Conservation System Task, we are passionate advocates for environmental 
            conservation and sustainability. Our mission is to empower individuals 
            and communities to make positive changes for the planet. Through 
            informative content, practical tips, and engaging resources, we strive 
            to inspire action towards a greener, healthier world. Whether you're a 
            seasoned environmentalist or just beginning your journey towards eco-conscious 
            living, we're here to support and guide you every step of the way. Join us 
            in our commitment to preserving and protecting our precious natural resources 
            for generations to come."</p>
            <div class="row">
              <select></select>
                <button><img src="icons/play.png" alt="">Listen</button>
              </div>
            
    </div>

    <div class="image">
        <img src="images/home.png" alt="" >
    </div>

</section>


<!-- About Section Ends -->


<!-- Review Section Starts -->

<!-- <section class="review" id="review">

    <h1 class="heading">Our Developmental <span> Team </span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/yanila.jpg" alt="">
            <h3>Christian Dave Yanila</h3>
        
            <div class="stars">
            <h3>Front-End Developer/ Project Manager</h3>
            </div>
            <p>He is akin to an architect and craftsman in the digital realm, responsible for building the visible aspects of websites and web applications. They translate design concepts into code using languages like HTML, CSS, and JavaScript to create user-friendly and visually appealing digital experiences.</p>
                <a href="https://web.facebook.com/christiandave.s.yanila"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/evad_alinay/?hl=en"><i class="fab fa-instagram"></i></a>
        </div>

        <div class="box">
            <img src="images/limo.jpg" alt="">
            <h3>Chrislyn Limo</h3>
        
            <div class="stars">
                <h3>Documentator/ Assistant Project Manager</h3>
            </div>
            <p>She organize and catalog all the documentation, making sure that every detail is neatly sorted and easily accessible for anyone who needs it. They're like the guardians of knowledge, ensuring that everyone on the team knows where to find essential information and guidelines.</p>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
        </div>

        <div class="box">
            <img src="images/gaspar.jpg" alt="">
            <h3>Riben Clark Gaspar</h3>
        
            <div class="stars">
            <h3>Back-End Developer</h3>
            </div>
            <p>He is like an architect behind the scenes of a digital system, responsible for designing and maintaining the server-side logic of websites and web applications. They work with languages like Python, Ruby on Rails, or Node.js to build databases, handle user authentication, and ensure the smooth functioning of the entire system.</p>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
        </div>

        <div class="box">
            <img src="images/yasa.jpg" alt="">
            <h3>Milo Yasa Jr.</h3>
        
            <div class="stars">
            <h3>Assistant Documentator</h3>
            </div>
            <p>He is like an apprentice to the documentator,
                 aiding in keeping documentation current and learning effective organization. Together, they maintain comprehensive and accurate project documentation, vital for team success.</p>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
        </div>

        <div class="box">
            <img src="images/carale.jpg" alt="">
            <h3>Mary Ann Carale</h3>
        
            <div class="stars">
            <h3>Project Analyst</h3>
            </div>
            <p>She is akin to a detective, unraveling project details to uncover insights and risks. 
                They analyze data, provide recommendations, and guide the team through challenges to ensure project success.</p>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
        </div>

        <div class="box">
            <img src="images/tio.jpg" alt="">
            <h3>Daniel Matt Tio</h3>
        
            <div class="stars">
            <h3>Assistant Project Analyst</h3>
            </div>
            <p>He collaborates closely with the lead analyst,
                 aiding in data collection and analysis to uncover insights for project improvement. Together, they transform data into actionable strategies, ensuring the project progresses effectively.</p>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
        </div>

    </div>

</section> -->

<!-- Review Section Ends -->


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

<a href="#about" class="fa-solid fa-angle-up" id="scroll"></a>

<!-- loader -->

<div class="loader-container">
    <img src="images/gif2.gif" alt="">
</div>






































    
    <!-- js file link -->
    <script src="Script/about.js"></script>
    <script src="Script/TTS.js"></script>
    <script src="Script/profile.js"></script>
</body>
</html>