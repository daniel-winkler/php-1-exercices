<?php require $_SERVER["DOCUMENT_ROOT"] . "/lib/app.php"; ?>

<!DOCTYPE html>
<html lang="en">
<?php require("./partial/head.php") ?>
<body>
   <?php include("./navbar.php")?>
    <h1>Hola, Daniel</h1>
    <p>Hoy es <strong>
        <?php
            $today = getdate();
            echo $today['weekday']; 
        ?>
        </strong>, ¿qué tal estás?</p>

    <?php // https://www.php.net/manual/es/function.date.php  '<?php echo' es lo mismo que '<?='
        $weekDays = [
            1 => 'lunes',
            2 => 'martes',
            3 => 'miércoles',
            4 => 'jueves',
            5 => 'viernes',
            6 => 'sábado',
            7 => 'domingo',
        ];
    ?>
    <h1>Hola, <?= isset($_GET['name']) ? $_GET['name'] : "?name="; ?></h1> <!-- Imprime el nombre que se ha pasado como valor por parametros a la clave 'name' en la URL (superglobales) -->
    <p>Hoy es <strong><?= $weekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>

    <!-- START SCRIPTS  -->
    <?php require("./partial/scripts.php")?>
    <!-- END SCRIPTS  -->
</body>
</html>