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
        <link rel="stylesheet" type="text/css" href="CSS/ToDo.css" />
        

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
                echo "<a href='signupForm.php' class='btn'>Signup</a>";
                }

                
            ?> 
        </div>  

        <div id="menu-bar" class="fas fa-bars"></div>


</header>
<div class="TODO">

  <div class="content">

    <section class="todo">
      <h2>To-do <span>list</span></h2>
      <div class="input">
        <input
          type="text"
          class="input-field"
          id="todoInput"kt
          placeholder="Add a new todo"
        />

        <button class="btn">Add</button>
      </div>

      <ul class="scroll">
        <li id="todoList"></li>
      </ul>
      <div>
        <hr class="counter" />
        <div class="counter-container">
          <p><span id="todoCount">0</span> items total</p>
          <button id="deleteButton">Delete All</button>

        </div>
      </div>
    </section>
  
  </div>

</div>

<!-- Footer Section Starts -->

<div class="container1">

  <div class="share">
      <a href="https://web.facebook.com/christiandave.s.yanila"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/evad_alinay/?hl=en"><i class="fab fa-instagram"></i></a>
      <a href="https://twitter.com/daves_pic"><i class="fab fa-twitter"></i></a>
      <a href="https://www.youtube.com/channel/UC2gtw5nd7NQZFVzjIKBsuew"><i class="fab fa-youtube"></i></a>
  </div>

  <h1 class="credit">Created by <span>Team Greenomon</span> | all rights reserved! @2024</h1>

</div>

<!-- Footer Section Ends -->


<!-- loader -->

<div class="loader-container">
  <img src="images/gif2.gif" alt="">
</div>
  























    <script src="Script/ToDo.js" defer></script>
    <script src="Script/profile.js"></script>

  </body>
</html>
