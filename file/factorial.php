<!-- Q2. Wap in PHP to find factorial of a number. -->

<!DOCTYPE html>
<html>
    <head>
        <title>Factorial Calculator</title>
    </head>
    <body>
    <form method="post" action="">
        Enter a number: <br>
        <input type="number" name="number">
        <input type="submit" name="submit" value="Factorial">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $factorial = 1; // Initialize factorial to 1

            if ($number >= 0) { // Check the number is non-negative
                for ($i = 1; $i <= $number; $i++) {  // Calculate factorial
                    $factorial *= $i;
                }
                echo "Factorial of $number is: $factorial"; // Display factorial
            } 
            else {
                echo "Error: Factorial is not defined for negative numbers."; // If the number is negative
            }
        }
    ?>
    </body>
</html>
