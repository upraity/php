<?php
    $a = 50; // Global Variable

    function paste(){
        $a = 10; // Local Variable
        echo $a. "\n";
        global $a;
        echo $a;
    }

    echo $a. "\n";
    paste(); // function calling

    //if we define variable so that change the global variable value
    $x = 20;
    function simple(){
        global $x;
        $x = 40;
        echo "\n" .$x; // you can see that global value has changed
    } 

    simple(); // function calling

    // Global variable are stored in array
    echo var_dump($GLOBALS); 
    echo var_dump($GLOBALS['a']);
?>