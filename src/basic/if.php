<?php


if ($coder) {
  $resultado = "Eres Coder!";
}

if ($coder) {
  $resultado = "Eres Coder!";
} else {
  $resultado = "Aprende a codear!";
}


if ($curso == "fullstack") {
  $resultado = "Eres del curso de desarrollo fullstack!";
} else if ($codespace == "java") {
  $resultado = "Eres del curso de Java";
} else {
  $resultado = "No estas registrado aún";
}


// Operador ternario
$frase = $edad >= 18 ? "Eres mayor de edad" : "Eres menor de edad";

$saludo = "Hola";
$bar = $saludo ?: "adios"; // ternario simplificado que imprime la variable si es verdadera

echo $bar;


// If alternativo
if ($curso == "fullstack"): // usamos dos puntos en vez de las llaves {}
  $resultado = "Eres del curso de desarrollo fullstack!";
elseif ($codespace == "java"):
  $resultado = "Eres del curso de Java";
else:
  $resultado = "No estas registrado aún";
endif; // cerramos el bucle con un endif

?>