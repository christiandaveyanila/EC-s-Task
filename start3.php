<?php
session_start();
if($_SESSION["user"] != true){
    header("refresh: 0; url=signupForm.php");
}else{
    header("refresh: 0; url=craftIt3.php");
}
    
?>

