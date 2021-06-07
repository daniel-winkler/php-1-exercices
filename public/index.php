<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php include("./navbar.php")?>
    <h1>Hola, Daniel</h1>
    <p>Hoy es <strong>
        <?php
            // $language = $lang['lang-ger'];
            // echo $language;
            // $_COOKIE['language'] = 'es';
            // setcookie('language', $_COOKIE['language']);
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
    <h1>Hola, <?= $_GET['name']; ?></h1> <!-- Imprime el nombre que se ha pasado como valor por parametros a la clave 'name' en la URL (superglobales) -->
    <p>Hoy es <strong><?= $weekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>
        
</body>
</html>