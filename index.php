<?php
 /*   $num1 = "3"; //3 in double quotes become a string
    $num2 = 9;
    $sum =$num1+$num2;
    echo $sum;
    var_dump($num1); 
    echo "<br> hello world"; //<br> is break statement
    print "<br>world"; //echo and print can print the op
*/


// program to swap two int
//using 3rd variable
$x = 5;
$y = 6;
print"before swaping: x=5 y=6";
$z = $x;
$x = $y;
$y =$z;
print"<br>after swaping x= $x and y= $y";

//without using 3rd variable
$x=$x+$y;
$y=$x-$y;
$x=$x-$y;
print"<br> after swaping x= $x and y= $y";
?>