<?php
    // foreach loop in php
    $arr = array('Apple','Banana','Grapes','Mango');

    //this is a simply a for loop that use to print an value of array
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i]. "\n";
    }

    //using for loop we see that we write *bahut kuch* but see below 
    echo "\nUsing foreach loop \n"; // we can see using foreach loop we write some words only 
    foreach ($arr as  $value){
        echo $value. "\n";
    }
?>