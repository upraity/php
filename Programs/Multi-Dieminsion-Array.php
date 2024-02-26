<?php
    //Multi Dieminsion Array
    $md = array(
        array(2,5,7,8),
        array(1,2,3,1),
        array(5,6,7,2));
        
        echo var_dump($md); //for simple see thae array it gives all values of array
        
        // it gives one one value of array
        echo $md[0][0];    
        echo $md[0][1];
        echo $md[0][2];
        echo $md[0][3];
        echo $md[1][0];
        echo $md[1][1];
        echo $md[1][2];
        echo $md[1][3];
        echo $md[2][0];
        echo $md[2][1];
        echo $md[2][2];
        echo $md[2][3];     
        
        //using for loop
        for($i = 0; $i < count($md); $i++){
            echo var_dump($md);
        }

        //one more way
        for($i = 0; $i < count($md); $i++){
            for($j = 0; $j <= count($md); $j++){
                echo $md[$i][$j]. " ";
            }
            echo "\n";
        }

        //one more way
        for($i = 0; $i < count($md); $i++){
          for($j = 0; $j < count($md[$i]); $j++){
              echo $md[$i][$j]. " ";
          }
          echo "\n";
        }
?>