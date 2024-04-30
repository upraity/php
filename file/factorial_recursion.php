<!-- Q8. Wap to find factorial of a number using recursion.  -->
<!DOCTYPE html>
<html>
    <head>
        <title>Factorial Calculator using Recursion</title>
    </head>
    <body>
    <form method="post" action="">
        Enter a number: <br>
        <input type="number" name="number">
        <input type="submit" name="submit" value="Calculate Factorial">
    </form>
    <?php
        function factorial($n) {
            if ($n === 0 || $n === 1)   return 1;
            else    return $n * factorial($n - 1);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            if ($number >= 0) {
                $result = factorial($number);
                echo "Factorial of $number is: $result";
            } else echo "Error: Factorial is not defined for negative numbers.";
        }
    ?>

    </body>
</html>
