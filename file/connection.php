<!-- Q12. Wap to established a connects with the database on the server. -->
<?php
    // Database connection parameters
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $database = "discuss"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    } 

    echo "Connected successfully";
?>
