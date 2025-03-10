<?php

require $_SERVER["DOCUMENT_ROOT"] . "/lib/app.php";

// echo "<pre>"; var_dump($_POST); echo "</pre>";

// echo "<pre>"; var_dump($_FILES); echo "</pre>";

$query = 'INSERT INTO `employees` (`name`, `email`, `age`, `city`) VALUES (:nombre, :correo, :edad, :ciudad);';

$params = [
    ":nombre" => $_POST["name"],
    ":correo" => $_POST["email"],
    ":edad" => $_POST["age"],
    ":ciudad" => $_POST["city"]
];

$stm = $dbConnection->prepare($query);

// $stm->bindParam(":nombre", $_POST['name']);
// $stm->bindParam(":correo", $_POST['email']);
// $stm->bindParam(":edad", $_POST['age']);
// $stm->bindParam(":ciudad", $_POST['city']);

$stm->execute($params); // execute te ejecuta el statement despues de recoger toda la informacion con las variables anteriores.

header('Location: /employees.php?message=' . urlencode('El usuario '.$_POST['name'].' se ha añadido correctamente.'));