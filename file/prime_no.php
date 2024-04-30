<!-- Q5. Wap to check the nunmber is Prime or not -->
<!DOCTYPE html>
<html>
    <head>
        <title>Prime Number Checker</title>
    </head>
    <body>
    <form method="post" action="">
        Enter a number: <br>
        <input type="number" name="number">
        <input type="submit" name="submit" value="Check Prime">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $isPrime = true;
            if ($number > 1) {
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }}
            else $isPrime = false;
            if ($isPrime) echo "$number is a prime number.";
            else echo "$number is not a prime number.";
        }
    ?>
    </body>
</html>
