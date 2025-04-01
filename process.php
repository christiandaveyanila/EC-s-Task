<?php
include("conn.php");

if(isset($_POST["signup_create"])){
    $process_first_name = $_POST['signup_first_name'];
    $process_middle_name = $_POST['signup_middle_name'];
    $process_family_name = $_POST['signup_family_name'];
    $process_email = $_POST['signup_email'];
    $process_bday = $_POST['signup_bday'];
    $process_gender = $_POST['signup_gender'];
    $process_password = $_POST['signup_password'];
    $process_userType = $_POST['signup_userType'];    
    $systemTime = time();



    // Check if the email already exists
    $statement_check_email = "SELECT * FROM `users` WHERE `email`='$process_email'";
    $query_check_email = mysqli_query($conn, $statement_check_email);
    $email_count = mysqli_num_rows($query_check_email);

    if($email_count > 0) {
       header("location:error1.php"); 
    } else {
        // Email does not exist, proceed with registration
        $statement = "INSERT INTO `users`
                                (`date_account_creation`,`date_account_update`, 
                                `first_name`,`middle_name`,`family_name`,
                                `email`,`bday`,`gender`,`password`,`usertype`)
                            VALUES
                                ($systemTime, $systemTime,'$process_first_name', 
                                '$process_middle_name', '$process_family_name',
                                '$process_email', '$process_bday', '$process_gender', 
                                '$process_password', '$process_userType')
        ";

        mysqli_query($conn, $statement);

        header("Location: loginForm.php");
        exit();
    }
}


    



session_start();
if(isset($_POST['form_login'])){
    $login_process_email = $_POST['login_email'];
    $login_process_password = $_POST['login_password'];

    $_SESSION["user"] = false;
    $_SESSION["admin"] = false;

    $statement_check_email = "SELECT * FROM `users` WHERE `email`='$login_process_email'";
    $query_check_email = mysqli_query($conn, $statement_check_email);
    $email_count = mysqli_num_rows($query_check_email);

    if ($email_count > 0) {
        $rowData = mysqli_fetch_array($query_check_email);
        $db_id = $rowData['id'];
        $db_password = $rowData['password'];
        $userType = $rowData['usertype'];


        if ($login_process_password == $db_password) {
            $_SESSION['session_user_id'] = $db_id; // important
            $_SESSION["user"] = true;

            // Assuming you've fetched $userType from the database
$userType = $rowData['usertype'];

// Check if the user type is admin
if ($userType == "admin") {
    $_SESSION["admin"] = true;
}

    
            
            if ($userType == "user") {
                header("Location: index.php"); // Redirect to index.php for regular users
                exit();
            } elseif ($userType == "admin") {
                header("Location: table.php"); // Redirect to table.php for admin users
                exit();
            }
        } else {
            header("Location: error2.php"); // Redirect to error page for incorrect password
            exit();
        }
    } else {
        header("Location: error3.php"); // Redirect to error page for user not found
        exit();
    }
} else {
    echo "Error in querying the database."; // Handle database query error
}




if(isset($_POST['update_user'])){
    $user_id = $_POST['id'];
    $user_first_name = $_POST['first_name'];
    $user_middle_name = $_POST['middle_name'];
    $user_family_name = $_POST['family_name'];
    $userType = $_POST['usertype'];
    $user_bday = $_POST['bday'];
    $user_gender = $_POST['gender'];

    $query = "UPDATE users SET first_name='$user_first_name', middle_name='$user_middle_name', family_name='$user_family_name', usertype='$userType', 
                               bday='$user_bday', gender='$user_gender'
                WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "Updated Successfully";
        header('location: table.php');
        exit(0);
    }
}

if(isset($_POST['delete_account'])){
    $user_id = $_POST['id'];
    $statement = "DELETE FROM `users` WHERE id=$user_id";
    $query_run = mysqli_query($conn, $statement);

    if($query_run){
        $_SESSION['message'] = "Updated Successfully";
        header('location: table.php');
        exit(0);
    }
}
    ?>


