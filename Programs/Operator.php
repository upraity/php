<?php
/*Operators 
1. Arithmetic Operator
2. Assignment Operator
3. Comparison Operator
4. Logical Operator
*/
 $a = 10;
 $b = 5;

 //1. Arithmetic Operator
 echo "Addition of a+b: "       .$a + $b.  "\n";
 echo "Subtraction of a-b: "    .$a - $b.  "\n";
 echo "Multiplication of a*b: " .$a * $b.  "\n";
 echo "Divide of a/b: "         .$a / $b.  "\n";
 echo "Mod of a%b: "            .$a % $b.  "\n";
 echo "Power of a**b: "         .$a ** $b. "\n";

 //2. Assignment Operator
 $x = $a;
 echo "x value is: " .$a. "\n";
 $a +=5;
 echo "a value is: " .$a. "\n";
 $a -=4;
 echo "a value is: " .$a. "\n";
 $a *=3;
 echo "a value is: " .$a. "\n";
 $a /=2;
 echo "a value is: " .$a. "\n";
 $a %=2;
 echo "a value is: " .$a. "\n";
 
 //3. Comparison Operator
 $y = 7;
 $z = 5;
 $w = 5;

 echo var_dump($y == $z);                           // there y and z are not equal so output is false(0)
 echo var_dump($w == $z). "or " .($w == $z). "\n"; // there w and z are equal so output is true(1)
 echo var_dump($y >= $z);                         // this operator is use to check the number is greater than or equal 
 echo var_dump($w <= $z);                        // this operator is use to check the number is smaller than or equal 
 echo var_dump($y > $z);                        // this operator is use to check the number is greater or not and return true or false
 echo var_dump($y < $z);                       // this operator is use to check the number is smaller or not and return true or false 
 echo var_dump($w <> $y);                     // not equal to operator

 //4. Logical Operator
 $m = true;
 $n = false;

 echo var_dump($m and $n);
 echo var_dump($m && $n);
 echo var_dump($m or $n);
 echo var_dump($m || $n);
 echo var_dump(!$m);
?>