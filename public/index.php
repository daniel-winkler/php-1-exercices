<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Daniel</h1>
    <p>Hoy es<strong>
        <?php 
            $today = getdate();
            echo $today['weekday']; 
        ?>
        </strong>, ¿qué tal estás?</p>

</body>
</html>