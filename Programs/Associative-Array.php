<?php
    //Numeric Array or Index Array
    $arr = array('ram','shiv','kumar','arjun');

    echo $arr[0];
    echo $arr[1];
    //using array for loop 
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i]. "\n";
    }

    //using array foreach loop 
    foreach ($arr as $naam){
        echo $naam. "\n";
    }

    //you can see that both loop has same output and you can use/choose any loop 

    //Associative Array
    $first = array('aman' => 'abh', 'shubham' => 'shubh', 'khushi' => 'happy', 'tanishka' => 'tanu', 'mohit' => 'o', 7 => 'dj'); //Using this symbol => we associate a value to another value (string) 
    echo $first['aman']. "\n";
    echo $first[7];

    //Associative array usinf foreach loop
        foreach ($first as $key => $value) { //where $key is a first value in array
            echo "\n Short name of $key is $value";
        }
?>
