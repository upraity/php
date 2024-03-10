<?php
echo "welcome";
    $file = fopen('yoursfile.txt','w');   //when this file not exit so automatticay file create & write text to the file and when file exits so this code write the file
    fwrite($file,"This is the content\n"); //in fwrite() function you can write the file but some  content are written alredy so this overwrite the text and you see only overwritted text (not see before)
    fwrite($file,'hello');             //after you use the fwrite() function so they sentence is not overwrite because it use in next line 
    fclose($file);
?>