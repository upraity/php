<?php
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "system";

    $conn = mysqli_connect($server, $username, $password, $database);
    if($conn){
        echo "connection successfully";
    }
    else{
        die(mysqli_connect_error());
    }
?>
