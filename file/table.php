<!-- Q13. Wap to run a query forming a table in database server. -->
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; 
    $password = "";  
    $database = "discuss"; 
    $conn = new mysqli($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE userss (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table 'users' created successfully";
    } 
    else {
        echo "Error creating table: " . $conn->error;
    }
?>
