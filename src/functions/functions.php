<?php

function call(string $name): string {
  return "Por favor, " . $name . ", acuda a recepción.";
}

$square = function(int $number): int {
  return $number * $number;
};

$ouput = $square(5);

function add(int $a, int $b = 1): int { // con un valor por defecto lo podemos omitir como argumento de la funcion y valdrá su valor por defecto. Si se pone como argumento lo machaca. Siempre se ponen como ultimo argumento para evitar errores
  return $a + $b;
}

function addFive(int &$a): int {
  return $a += 5;
}

//En PHP por defecto se pasan lor valores, en JS se pasan las referencias.