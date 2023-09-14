<?php

$a = 89;
$b = 76;
$c = 75;

$avg = ($a + $b + $c) / 3;

echo $avg;

echo PHP_EOL;

if($avg >= 80 && $avg <= 100){
    $grade = "A";
}elseif($avg >= 70 && $avg <= 79){
    $grade = "B";
}elseif($avg >= 60 && $avg <= 69){
    $grade = "C";
}elseif($avg >= 50 && $avg <= 59){
    $grade = "D";
}else {
    $grade = null;
}

echo $grade;
