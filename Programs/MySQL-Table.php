<?php

    //for connection to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sabkacode";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die('Connection fail!!'.mysqli_connect_error());
    }
    else{
    echo "Connection was successful\n";
    }

    //create database
    $sql = "CREATE DATABASE sabkacode";
    $result = mysqli_query($conn, $sql);

    //Check for the db create success or not
    if($result){
        echo "\nThe db was create successfully\n";
    }else{
        echo "The db was not create successfully becoz of this error " .mysqli_error($conn);
    }

    //create table
    $sql = "CREATE TABLE `user` (`sno` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(10) NOT NULL, `mobile` VARCHAR(10) NOT NULL, PRIMARY KEY(`sno`))";
    $result = mysqli_query($conn, $sql);
    
      //Check for the table create success or not
      if($result){
        echo "\nThe table was create successfully\n";
    }else{
        echo "The table was not create successfully becoz of this error " .mysqli_error($conn);
    }

   




?>