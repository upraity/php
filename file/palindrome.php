<!-- Q4. Wap to find a number is palindrome or not -->
<!DOCTYPE html>
<html>
    <head>
        <title>Palindrome Checker</title>
    </head>
    <body>
    <form method="post" action="">
        Enter a number: <br>
        <input type="number" name="number">
        <input type="submit" name="submit" value="Check Palindrome">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $reversedNumber = (int) strrev((string) $number);

            if ($number == $reversedNumber) {
                echo "$number is a palindrome.";
            } else {
                echo "$number is not a palindrome.";
            }
        }
    ?>
    </body>
</html>
