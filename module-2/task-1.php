<?php
/*
Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.
*/


function isEven($start, $end){
    for($i=$start; $i<=$end; $i++):
        if($i%2 == 0):
            echo "{$i}, ";
        endif;
    endfor;
}
isEven(1,20);
