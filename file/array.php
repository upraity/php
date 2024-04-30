<!-- Q9. Write a program to input numbers in array and associative array. -->
<!DOCTYPE html>
<html>
<head>
    <title>Input Arrays</title>
</head>
<body>

<form method="post" action="">
    Enter numbers separated by commas to create a regular array: <br>
    <input type="text" name="regularArrayInput">
    <br>
    Enter key-value pairs (number: description) separated by commas to create an associative array: <br>
    <input type="text" name="associativeArrayInput">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regularArrayInput = $_POST["regularArrayInput"];
    $associativeArrayInput = $_POST["associativeArrayInput"];

    $regularArray = explode(",", $regularArrayInput);
    
    $associativeArray = [];
    if (!empty($associativeArrayInput)) {
        $pairs = explode(",", $associativeArrayInput);
        
        foreach ($pairs as $pair) {
            $parts = explode(":", $pair);
            $key = trim($parts[0]);
            $value = trim($parts[1]);
            $associativeArray[$key] = $value;
        }
    }

    echo "Regular Array entered:<br>";
    foreach ($regularArray as $number) {
        echo $number . "<br>";
    }

    echo "<br>Associative Array entered:<br>";
    foreach ($associativeArray as $key => $value) {
        echo "Number: $key, Description: $value<br>";
    }
}
?>

</body>
</html>
