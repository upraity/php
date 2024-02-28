<?php
    //Database Connection 

    /*There are two ways to connect to My SQL Database
    1. MySQLi extension (for use only mysql db)
    2. PDO (for use any db)
    */

    // Connecting to the Db
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection
    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn){
        die('Connection fail!!'.mysqli_connect_error());
    }
    else{
    echo "Connection was successful";
    }
?>