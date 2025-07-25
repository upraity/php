<!-- Q18. Wap to print output of a function calling by value and calling by refrence. -->
<?php
    function incrementByValue($num) {
        $num += 1;
        return $num;
    }  

    // Function to increment a number by reference
    function incrementByReference(&$num) { 
        $num += 1; 
    } 
 
    $value = 5;

    // Calling the function by value
    echo "Calling by value:<br>";
    echo "Initial value: $value<br>";
    incrementByValue($value);
    echo "Value after function call: $value<br>"; 
    echo "<br>";

    // Calling the function by reference
    echo "Calling by reference:<br>";
    echo "Initial value: $value<br>";
    incrementByReference($value);
    echo "Value after incrementing by reference: $value<br>";
?>
