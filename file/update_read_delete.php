<!-- Q14. Wap to update a row, read the data, delete the row in the database of the server. -->
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

    // Update a row
    $sqlUpdate = "UPDATE userss SET email='abh@example.com' WHERE id=1";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }

    // Read data
    $sqlRead = "SELECT id, username, email FROM userss";
    $result = $conn->query($sqlRead);

    if ($result->num_rows > 0) {
        echo "Data retrieved successfully<br>";
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "No data found<br>";
    }

    // Delete a row
    $sqlDelete = "DELETE FROM userss WHERE id=1";

    if ($conn->query($sqlDelete) === TRUE) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error . "<br>";
    }
?>
