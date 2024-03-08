<?php
    //for read the file 
    readfile('yoursfile.txt');               //for only read the file
    echo readfile('yoursfile.txt'); //for read the file and print how many word in the file

    //fopen  - is used to open the file
    //fread  - is used to read the file
    //fclose - is used to close the file
    $file = fopen('yoursfile.txt','r');
    if(!$file){
        die('Unable to ope this file.not exit / not valid');
    }
    $content = fread($file,filesize("yoursfile.txt"));
    echo $content;
    fclose($file);

    //r  = reading the file only
    //r+ = reading and writing the file
    //w  = writing the file only
    //w+ = reading and writing the file, when file does not exists so attempt to create it
    //a  = for reading only if the file does not exit then they attempt to create it
    //a+ = for reading and writing the file if the file does not exits then thay attempt to create the file

    //and more modes are available that you can see here: https://php.net/manual/en/function.fopen.php
?>