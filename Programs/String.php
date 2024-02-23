<?php

    $name = 'SabkaCode';
    echo $name; //simple print name
    echo "\n";
    echo "The length of string ".strlen($name)."\n"; // print the length of the string 
    echo "The reverse string is ".strrev($name)."\n"; //print the string in reverse
    echo "The position of a character is ".strpos($name,"e")."\n";// print the position of that char that you write there and search
    echo "Replace the C to c ".str_replace('C','c',$name)."\n"; // it's use to replace the char to another character.
    echo "Repeat a words many times that you want ".str_repeat($name,5)."\n"; // simple repeat word many times
    echo str_word_count($name);   // it function count in string how many words are there
    echo ucwords("user name is dj\n");// using this function a word first letter is capital 
    echo strtoupper("user name is dj\n");// using this function all letter are capital 
    echo strtolower("USER NAME IS DJ\n");// using this function all capital words  are lower 
    echo ucfirst("user name is dj\n");// using this function only first letter is capital 
    echo lcfirst("USER name is dj");// using this function first word first  letter is lower  
    echo rtrim("  this is php   "); // remove the right side spaces
    echo ltrim("  this is php   "); // remove the left side spaces
?>
