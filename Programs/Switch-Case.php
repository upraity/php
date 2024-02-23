<?php
    $age = 30;
    switch($age){
        case 18:
            echo "You are eligible for vote\n";
            break;
        case 12:
            echo "your age is 12\n";
            break;
        case 30:
            echo "Your age is 30\n";
            break;
        default:
            echo "Enter a number\n";
    }
?>