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
    // return max($array);
}

function averageAge(array $array): float {
    $sum = 0;
    foreach ($array as $element) {
        $sum += $element['age'];
    }
    return $sum / count($array);
    // return array_sum(array_column($array, 'age')) / count($array);
}

// REVERSE TEST

function reverseString($input) {
    $chars = mb_str_split($input); // array de todos los caracteres del string manteniendo los caracteres 'raros' que estan fuera de la tabla ASCII (tildes, circunflejos, eñe, etc)
    return implode("", array_reverse($chars));
    // return strrev($input);
}

function reverseWords($sentence) {
    $words = explode(" ", $sentence);
    $reverseWords = array_reverse($words);
    $reverseString = implode(" ", $reverseWords);
    return $reverseString;
}

function reverseCharactersInWords($input) {
    $words = explode(" ", $input);
    $reversedArray = [];
    foreach($words as $word) {
        $reversedArray[] = reverseString($word);
    }
    $reverseString = implode(" ", $reversedArray);
    return $reverseString;
}

// SOLUCION ZACARIAS REVERSE TEST

// function reverseString (string $string): string { // $tring = Hola qué tal
//     $chars = mb_str_split($string);
    
//     return implode('', array_reverse($chars));
// }

// function reverseWords (string $string): string {
//     $words = explode(' ', $string);

//     return implode(' ', array_reverse($words));
// }

// function reverseCharactersInWords (string $string): string {
//     $words = explode(' ', $string);

//     $turnWords = [];

//     foreach($words as $word) {
//         $turnWords[] = reverseString($word);
//     }

//     return implode(' ', $turnWords);
// }
