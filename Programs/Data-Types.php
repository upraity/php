<?php
    $name = "Dj"; //String
    $salary = 5000000;  //Interger
    $experience = 1.5; //Float
    $bonus = "50.25k";//Decimal
    $bollean = true; //Bollean (true or false)
    $friends = array('Shubh','ABH','Mohit','Happy','TK');


    echo "My Name is ".$name."\nSalary is ".$salary." & experience is ".$experience." year\n& bonus is ".$bonus ;
    echo $friends; //simple print 
    echo var_dump($friends);//var_dump is a function that use to see what is store what value
    echo $friends[0];//using this you can see what vzlue store the position in 0,1,2,3....
    for($i=0;$i<count($friends);$i++){
        echo $friends[$i]."\n";// \n use to next line 
    }
    //when we print that array number that is not in the array like
    //echo $friends[5];// it gives error in the program because index 5 is not in the array

    $number = "";
    echo var_DUmp($number);//it shown string is empty
    $nu = NULL;
    echo var_dump($nu);//it is show null
    
?>