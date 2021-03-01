<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCREEN RC</title>
</head>
<body>

    <?php
    echo '<h1 style="text-align: center;">'.$typeV.' encendido!</h1>';
    echo '<h2 style="text-align: center;">Ya estas listo para moverte "'.$name.'"</h2>';
    

        if ($ON) {
            
            echo '<form method="post">';
            echo '<input type="submit" name="acelerar" value="Acelerar">';
            echo '<input type="submit" name="retroceder" value="Retroceder">';
            echo '<input type="submit" name="derecha" value="Derecha">';
            echo '<input type="submit" name="izquierda" value="Izquierda">';
            echo '<input type="submit" name="apagar" value="Apagar">';
            echo '<input type="hidden" name="nombre" value="'.$name.'">';
            echo '<input type="hidden" name="tipoV" value="'.$typeV.'">';
            echo '<input type="hidden" name="tipoC" value="'.$typeC.'"><br><br>';
            echo '</form>';

        }else{
            echo '<h3>'.$name.' ha sido apagado :(</h3>';
        }
    ?>
</body>
</html>