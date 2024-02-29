<?php

    //for connection to database
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

    //create database
    $sql = "CREATE DATABASE sabkacode1";
    $result = mysqli_query($conn, $sql);

    //Check for the db create success or not
    if($result){
        echo "\nThe db was create successfully\n";
    }else{
        echo "The db was not create successfully becoz of this error " .mysqli_error($conn);
    }




?>