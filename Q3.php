<?php

$num_arr = [10, 2, 5, 6, 3, 5, 9, 4, 6, 12];
$odd_arr = [];
for ($i=0; $i < count($num_arr); $i++) { 
    if ($num_arr[$i] % 2 != 0) {
        array_push($odd_arr, $num_arr[$i]);
    }
}

$sum = 0; 
for ($i=0; $i < count($odd_arr); $i++) { 
    $sum += $odd_arr[$i];
}

echo "Average of odd numbers: ". $sum / count($odd_arr);