<?php

declare(strict_types=1);

function sumArray(array $array): int {
    $sum = 0;
    foreach ($array as $element) {
        $sum += $element;
    }
    return $sum;
    // return array_sum($array);
}

function findMax(array $array): int {
    $max = $array[0];
    for ($index = 0 ; $index < count($array) ; $index++) {
        if ($array[$index] > $max) {
            $max = $array[$index];
        } 
    }
    return $max;
}