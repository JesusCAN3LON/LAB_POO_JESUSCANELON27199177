<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPUESTA</title>
</head>
<body>
    <?php
        if (!$condition) {
            echo '<h3>Intento '.$try.' de 5</h3><br>';

            echo '<form method="post">';
            echo '<input name="number" type="number" placeholder="Introduzca su numero">';
            echo '<input type="hidden" name="numberRandom" value="'.$numberRandom.'">';
            echo '<input type="hidden" name="try" value="'.$try.'">';
            echo '<input type="submit" value="ENVIAR NUMERO">';
            echo '</form>';
        }
    ?>
</body>
</html>