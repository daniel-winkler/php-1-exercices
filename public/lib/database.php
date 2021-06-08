<?php 

$dbUser = "root";
$dbPassword = "root";
$dbHost = "localhost";
$dbDatabase = "employees";

try {
    // PDO conecta PHP con nuestra base de datos (como mongoose en MongoDB)
    $dbConnection = new PDO("mysql:host=${dbHost};dbname=${dbDatabase}", $dbUser, $dbPassword);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // catch recibe dos argumentos, una excepcion que es PDOException (que es una clase preestablecida que extiende Exception para dar mas informacion detallada del error) y una variable que contiene el error $e
} catch(PDOException $e) {
    echo "Error a la conexion a la base de datos:" . $e->getMessage();
}

// $dbConnection = null;

// var_dump($dbConnection);
// var_dump(gettype($dbConnection));