<!-- Q3. Wap to print Fibonacci Series. -->
<!DOCTYPE html>
<html>
    <head>
        <title>Fibonacci Series</title>
    </head>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter the number of number: <br>
        <input type="number" name="number">
        <input type="submit" name="submit" value="Generate Fibonacci Series">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            if ($number > 0) {
                $firstTerm = 0;
                $secondTerm = 1;
                echo "Fibonacci Series: $firstTerm, $secondTerm";
                for ($i = 2; $i < $number; $i++) {
                    $nextTerm = $firstTerm + $secondTerm;
                    echo ", $nextTerm";
                    // Update the values of firstTerm and secondTerm for the next iteration
                    $firstTerm = $secondTerm;
                    $secondTerm = $nextTerm;
                }
            } else {
                echo "Error: Please enter a positive integer for the number of number.";
            }
        }
    ?>
    </body>
</html>
