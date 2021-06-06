<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Daniel</h1>
    <p>Hoy es <strong>
        <?php // TODO: SOLUCIONAR COMO CAMBIAR EL IDIOMA A ESPAÑOL.
            // $language = $lang['lang-ger'];
            // echo $language;
            // $_COOKIE['language'] = 'es';
            // setcookie('language', $_COOKIE['language']);
            $today = getdate();
            echo $today['weekday']; 
        ?>
        </strong>, ¿qué tal estás?</p>
        

</body>
</html>