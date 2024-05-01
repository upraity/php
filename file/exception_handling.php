<!-- Q15. Wap for exception handling. -->
<?php
    try {
        // Code that may throw an exception
        $numerator = 10;
        $denominator = 0;

        if ($denominator === 0) {
            throw new Exception("Division by zero is not allowed.");
        }

        $result = $numerator / $denominator;

        echo "Result: " . $result;
    } 
    catch (Exception $e) {
        // Handle the exception
        echo "Error: " . $e->getMessage();
    }
?>
