<?php

    echo"Include:<br>";
    //include
    include 'MySQL-Databases-Connection.php'; //include will only produce a warning (E_WARNING) and the script will continue

    $sql = "SELECT * FROM `details` ";
    $result = mysqli_query($conn, $sql);

    //find the number of records returned
    $num = mysqli_num_rows($result);
    echo "<br>" .$num. " records found in the database<br>";

    echo"<br>Require:<br>";
    
    //require
    require 'MySQL-Databases-Connection.php'; //require will produce a fatal error (E_COMPILE_ERROR) and stop the script
    $sql = "SELECT * FROM `details` ";
    $result = mysqli_query($conn, $sql);

    //find the number of records returned
    $num = mysqli_num_rows($result);
    echo "<br>" .$num. " records found in the database<br>";

    /*Both include and require are same but some differece*/

?>