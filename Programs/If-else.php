<?php
    $a = 5;
    $b = 2000;
    $c = 2016;

    if($a > 2){
        echo "a is greater than 2\n"; 
    }
    else{
        echo "a is less than 2 OR not greater than 2\n";
    }

    //even odd
    if($a % 2 == 0){
        echo "a is even number\n";
    }
    else{
        echo "a is odd number\n";
    }

    //positive, negetive and zero
    if($a > 0){
        echo "a is positive integer\n";
    }
    elseif($a < 0){
        echo "a is negative integer\n";
    }
    else{
        echo "a is zero\n";
    }

    //find leap year
    if($b % 100 == 0){
        if($b % 400 == 0){
        echo "b is leap year\n";
        }
        else{
            echo "b is not a leap year\n";
        }
    }
    elseif($b % 4 == 0){
            echo "b is leap year\n";
    }
?>