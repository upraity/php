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

    $sql = "SELECT * FROM `details` ";
    $result = mysqli_query($conn, $sql);

    //find the number of records returned
    $num = mysqli_num_rows($result);
    echo $num. " records found in the database<br>";
    
    //Display the rows 
    if($num > 0){
        // $rows = mysqli_fetch_assoc($result);
        //echo var_dump($rows);
        while($rows = mysqli_fetch_assoc($result)){
            // echo var_dump($rows);
            echo "<br>";
            echo $rows['sno']. "\t" .$rows['name']. "\t" .$rows['email']. "\t" .$rows['msg'];
        }
    }
?>