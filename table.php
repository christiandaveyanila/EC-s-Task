
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="icons/ICON.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>EC's Task Admin Panel</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" type="text/css" href="CSS/table.css" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

<!-- header section starts -->
<header>
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
</header>


    
<a href="index.php" class="btn"><i class="fa-solid fa-angle-left"></i> back </a>
<a href="signupForm.php" class="btn"><i class="fa-solid fa-angle-left"></i> signup </a>
<a href="logout.php" class="btn"><i class="fa-solid fa-angle-left"></i> logout </a>

    <table class="content-table" id="content-table">
        
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>User Type</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Account Registration Date</th>
                <th>Last Update</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("conn.php");
            $statement = "SELECT * FROM `users`";
            $query = mysqli_query($conn, $statement);
            $rowCounter = 1;
            while($rowData = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $rowCounter; ?></td>
                <td><?php echo $rowData['id']; ?></td>
                <td><?php echo $rowData['usertype']; ?></td>
                <td><?php echo $rowData['email']; ?></td>
                <td><?php echo $rowData['first_name']; ?></td>
                <td><?php echo $rowData['middle_name']; ?></td>
                <td><?php echo $rowData['family_name']; ?></td>
                <td><?php echo $rowData['bday']; ?></td>  
                <td><?php echo $rowData['gender']; ?></td>
                <td><?php echo date("M d, Y h:i:s A", $rowData['date_account_creation']); ?></td>
                <td><?php echo date("M d, Y h:i:s A", $rowData['date_account_update']); ?></td>
                <td>
                    <a href="update_form.php?id=<?php echo $rowData['id']; ?>" class="btn1 btn-success" >Edit</a>
                </td>
                <td>
                    <a href="delete_form.php?id=<?php echo $rowData['id']; ?>" class="btn2 btn-danger" >Delete</a>
                </td>
            </tr>
            <?php
            $rowCounter++;    
            }
            ?>
        </tbody>
    </table>
</div>


<!-- Footer Section Starts -->

<section class="container">

    <div class="share">
        <a href="https://web.facebook.com/christiandave.s.yanila"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/evad_alinay/?hl=en"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/daves_pic"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UC2gtw5nd7NQZFVzjIKBsuew"><i class="fab fa-youtube"></i></a>
    </div>

    <h1 class="credit">Created by <span>Team Greenomon</span> | all rights reserved! @2024</h1>

</section>

<!-- Footer Section Ends -->

<!-- Scroll Top Button -->

<a href="#table" class="fa-solid fa-angle-up" id="scroll"></a>

<!-- loader -->
<div class="loader-container">
    <img src="images/gif2.gif" alt="">
</div>

<!-- js file link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="Script/thankYou.js"></script>
<script src="Script/profile.js"></script>
</body>
</html>
