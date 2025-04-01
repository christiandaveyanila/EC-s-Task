<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_users";

    $conn = mysqli_connect($server, $username, $password);
    $testConnect = mysqli_select_db($conn, $database);

?>