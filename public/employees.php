<?php 

require $_SERVER["DOCUMENT_ROOT"] . "/lib/app.php"; // se establece la ruta relativa desde la ruta absoluta desde donde se ha levantado el servidor (en este caso /public)

$query = isset($_GET["id"]) ? "SELECT * FROM employees WHERE id= :id" : "SELECT * FROM employees"; // lee si existe un parametro 'id' que pasamos al pinchar el enlace y nos redirige a nuestra tabla donde el id es el que pasamos por parametro
// $stm = $dbConnection->query($query); $stm significa statement y es un objeto que nos devuelve la query a nuestra base de datos y tiene multitud de propiedad a los que podemos acceder
$stm = $dbConnection->prepare($query);

if (isset($_GET["id"])) {
    $stm->bindParam(":id", $_GET["id"]);
}

$stm->execute();

$people = $stm->fetchAll(PDO::FETCH_ASSOC); // indicamos que nos devuelva el array de forma asociativa, por defecto ejecuta FETCH_BOTH, que nos devolverian el array repetido por indice y asociativo.
// $result = $stm->fetchAll();

// echo "<pre>"; var_dump($people); echo "</pre>";
// die();


?>


<?php
    // $people = [
    // ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
    // ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
    // ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
    // ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga']
    // ]; 
?>

<?php 

require $_SERVER["DOCUMENT_ROOT"] . "/employees_".(isset($_GET["format"]) ? $_GET["format"] : "html").".php";
