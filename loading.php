<?php
session_start();
if($_SESSION["user"] != true){
    header("location:index.php");
}
?>

<div class="loader-container">
    <img src="images/gif2.gif" alt="">
</div>
<style>
    .loader-container{
    position: fixed;
    top: 0; left: 0;
    z-index: 10000;
    background: #545454;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
}
</style>

<script>
    window.onload = function() {
    // Display the loader container
    document.querySelector('.loader-container');
    
    // Hide the loader after a delay (3 seconds in this example)
    setTimeout(function() {
        document.querySelector('.loader-container').style.display = 'none';
    }, 1000);
};

</script>