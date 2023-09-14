<?php

$inputValue = 45;

$fahrenheit = (($inputValue*9)/5)+32 ;
$celsius = (($inputValue-32)*5)/9 ;

echo "Input Value is {$inputValue}";

echo PHP_EOL;

echo "Celsius {$inputValue} in Fahrenheit is {$fahrenheit} Degree";

echo PHP_EOL;

echo "Fahrenheit {$inputValue} in Celsius {$celsius} Degree";
