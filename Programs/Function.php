<?php
    //Function in php
    $ram = [90, 88, 85, 95, 91];
    $sum = marks($ram); // function call
    $ave = avera($ram);// again call function
    echo "Total marks scored by Ram out of 500 is: $sum";
    echo "\nAverage of Ram marks is: $ave";

    function marks($ram){ // function define
        $s = 0;
        foreach($ram as $m){ // foreach loop
            $s += $m;       // addition your marks
        }
        return $s;        // return the sum of marks
    }

    function avera($ram){
        $s = 0;
        foreach($ram as $m) {
            $s += $m;
        }
        return  $s /count($ram);    
    }
?>