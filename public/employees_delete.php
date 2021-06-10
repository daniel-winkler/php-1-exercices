<?php

require $_SERVER["DOCUMENT_ROOT"] . "/lib/app.php";

// echo json_encode('hola');

$body = file_get_contents("php://input");

$person = json_decode($body, true); //json_decode es como el JSON.parse en JS (nos lo convierte en objeto)

$query = 'DELETE FROM employees WHERE id = :id';

$stm = $dbConnection->prepare($query);

$stm->bindParam(":id", $person['id']);

$stm->execute();

$response = [
    'status' => $stm->rowCount() === 0 ? "error" : "success",
    'message' => $stm->rowCount() === 0 ? "no hemos eliminado a nadie" : 'hemos eliminado a '.$person['name']
];

echo json_encode($response); // nos lo convierte en string, nuestro fetch nos lo vuelve a parsear a JSON y nos lo devuelve como data

// // echo "<pre>"; var_dump($_GET); echo "</pre>";
// // echo "<pre>"; var_dump($_POST); echo "</pre>";
// var_dump($person);

// header('Location: /employees.php?message=' . urlencode('El usuario '.$_POST['email'].' se ha añadido correctamente.'));
// header('Location: /employees.php');

// exit();