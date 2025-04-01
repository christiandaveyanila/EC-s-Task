<!-- css file link -->
<link rel="stylesheet" type="text/css" href="CSS/delete.css" />

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<?php
    include("conn.php");
    $user_id = $_GET['id'];
    $statement = "SELECT * FROM `users` WHERE id=$user_id";
    $query = mysqli_query($conn, $statement);
    $rowData = mysqli_fetch_array($query);
?>
<div class="container">
    <div class="content">
        <p>Delete <span><?php echo $rowData['first_name']." ".$rowData['middle_name']." ".$rowData['family_name'];?>'s</span> Account? </p>
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $user_id; ?>">
            <a href="table.php">Cancel</a>      |     <input type="submit" name="delete_account" value="Confirm Deletion">
        </form>
    </div>
</div>
