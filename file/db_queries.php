<!-- Q20. Wap to execute database queries like cross, join, inner join, self join, outer join. -->
<?php

// Create connection
$conn = new mysqli('localhost', 'root', '', 'sabkacode');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Cross Join
$sql = "SELECT * FROM table1 CROSS JOIN table2";
$result = mysqli_query($conn, $sql);
echo "Cross Join Result:<br>";
if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
} else echo "0 results";

// Inner Join
$sql = "SELECT * FROM table1 INNER JOIN table2 ON table1.id = table2.id";
$result = $conn->query($sql);
echo "<br>Inner Join Result:<br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
} else echo "0 results";

// Self Join
$sql = "SELECT * FROM table1 t1 INNER JOIN table1 t2 ON t1.id = t2.id";
$result = $conn->query($sql);
echo "<br>Self Join Result:<br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
} else echo "0 results";

// Left Outer Join
$sql = "SELECT * FROM table1 LEFT OUTER JOIN table2 ON table1.id = table2.id";
$result = $conn->query($sql);
echo "<br>Left Outer Join Result:<br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
} else echo "0 results";
?>
