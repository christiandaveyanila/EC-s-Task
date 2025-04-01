

<div class="profile-dropdown">
            <div onclick="toggle()" class="profile-dropdown-btn">
              <div class="profile-img">
              </div>
            </div>
    
            <ul class="profile-dropdown-list">
              <!-- <li class="profile-dropdown-list-item">
              <a href="#" >
                  <i class="fa-regular fa-user"></i>
                  Edit Profile
                </a> -->
              </li>

              
    
              <li class="profile-dropdown-list-item">
              <?php
              if(isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
                // User is not logged in, so show login and signup buttons
                echo"<a href='table.php' >Admin Panel</a>";
              } else {
                // User is logged in, so hide login and signup buttons include("profile.php"); 
                }

                
            ?> 
                  
               
              </li>
 
<hr/>
    
              <li class="profile-dropdown-list-item">
                <a href="logout.php">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  Log out
                </a>
              </li>
            </ul>
        </div>

        


