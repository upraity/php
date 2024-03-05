<?php

    // Connecting to the Db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "form";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die('Connection fail!!'.mysqli_connect_error());
    }
    else{
    echo "Connection was successfull<br>";
    }

    $sql = "DELETE  FROM `details` WHERE `name` = 'ram' ";
    $result = mysqli_query($conn, $sql);

    $aff = mysqli_affected_rows($conn);
    echo $aff;

    if($result){
        echo " Recods Deleted sucessfully";
    }
    else{
        $err = mysqli_error($conn);
        echo " Recods not deleted because this error $err";
    }

    //using limit to delete to recordes
    $sql = "DELETE  FROM `details` WHERE `email` = 'ram@gmail.com' limit 10";
    $result = mysqli_query($conn, $sql);

    $aff = mysqli_affected_rows($conn);
    echo $aff;

    if($result){
        echo " Recods Deleted sucessfully";
    }
    else{
        $err = mysqli_error($conn);
        echo " Recods not deleted because this error $err";
    }
    ?>