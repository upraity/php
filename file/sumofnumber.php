<!-- Q1.Wap in PHP for sum of digits. -->

<!DOCTYPE html>
<html>
    <head>
        <title>Sum of Numbers</title>
    </head>
    <body>

    <form method="post" action="">
        Enter number: <br>
        <input type="text" name="n1"><br>
        <input type="text" name="n2">
        <input type="submit" name="submit" value="Sum">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $sum = $n1 + $n2;

            // Display the sum
            echo "Sum of the numbers entered: " . $sum;
        }
    ?>

</body>
</html>
