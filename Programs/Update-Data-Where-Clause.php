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

    $sql = "SELECT * FROM `details`  ";
    $result = mysqli_query($conn, $sql);

    //find the number of records returned
    $num = mysqli_num_rows($result);
    echo $num. " records found in the database<br>";
    $no = 1;

    if($num > 0){
        while($rows = mysqli_fetch_assoc($result)){
            echo "<br>";
            //echo $rows['sno']. "\t" .$rows['name']. "\t\t" .$rows['email']. "\t\t" .$rows['msg']; 

            //if you can see the output with number line so
            echo $no. "\t" .$rows['name']. "\t\t" .$rows['email']. "\t\t" .$rows['msg']; 
            $no++;
        }
    }

    //Using where clause to update the data
    $sql = "UPDATE `details` SET `name` = 'ram' WHERE sno <= 4";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo "<br>Number of affected rows: $aff<br>";

    if($result){
        echo "<br>Record updated successfully";
    }
    else{
        echo "<br>Record could not update";
    }
?>