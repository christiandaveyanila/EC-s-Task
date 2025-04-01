<!-- css file link -->
<link rel="stylesheet" type="text/css" href="CSS/update.css" />

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<?php
    include("conn.php");
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $user = "SELECT * FROM users WHERE id='$user_id'";
        $user_run = mysqli_query($conn, $user);

        if(mysqli_num_rows($user_run) > 0){
            foreach($user_run as $user){

            ?>
<div class="btn">
<a href="table.php" class="btn"><i class="fa-solid fa-angle-left"></i> Back to Admin Panel</a>
</div>

<form action="process.php" method="POST">
<h2>Update <span>Form</span></h2>
<input type="hidden" name="id" value="<?=$user['id'];?>">


    <div class="row">
        <div class="col">
            <label for="">First Name</label>
            <input type="text" name="first_name" value="<?= $user['first_name'];?>" class="form-control">
        </div>
        <div class="col">
            <label for="">Middle Name</label>
            <input type="text" name="middle_name" value="<?= $user['middle_name'];?>" class="form-control">
        </div>
        <div class="col">
            <label for="">Family Name</label>
            <input type="text" name="family_name" value="<?= $user['family_name'];?>" class="form-control">
        </div>
        <div class="bday">
            <label for="">Birthday</label>
            <input type="date" name="bday" value="<?= $user['bday'];?>" class="form-control">
        </div>
        <div class="usertype">
            <label for="">User Type</label>
            <select name="usertype" id="">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <label class="title">Gender:</label> <br/>
        <div class="col">
            <label for="">Male</label>
            <input type="radio" name="gender" value="Male" <?= ($user['gender'] == 'Male') ? 'checked' : ''; ?> class="form-control">
        </div>
        <div class="col">
            <label for="">Female</label>
            <input type="radio" name="gender" value="Female" <?= ($user['gender'] == 'Female') ? 'checked' : ''; ?> class="form-control">
        </div>
        <div class="col">
            <label for="">Others</label>
            <input type="radio" name="gender" value="Others" <?= ($user['gender'] == 'Others') ? 'checked' : ''; ?> class="form-control">
        </div>
        <div class="col">
            <button type="submit" name="update_user" class="btn1 ">UPDATE</button>
        </div>
    </div>
</form>

<?php
            }

        }
        else{
            ?>
            <h4>No record found</h4>
            <?php
        }
    }
    
?>