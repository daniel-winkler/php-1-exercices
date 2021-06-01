<?php

$optionId = 1;

switch($optionId){
  case (1):
    $optionText = "Leer menú";
    break;
  case (2):
    $optionText = "Editar menú";
    break;
  case (3):
    $optionText = "Eliminar menú";
    break;
  default: // se ejecuta cuando no existe un caso declarado en la variable
    $optionText = "Opción no disponible";
    break; //utilizamos break para asegurarnos que salga del bucle una vez entre en un caso.
}

echo $optionText;

?>