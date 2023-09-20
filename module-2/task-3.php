<?php

/*
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/

$a = 5;
$b = 7;
$c = 4;

for($i=0;$i<10;$i++):
    if($a>100):
        break;
    endif;
    echo "{$a}, ";
    $a = $b;
    $b = $c;
    $c = $a+$b;
endfor;
