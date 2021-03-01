<!--Jesus Canelon CI:27.199.177
    Seccion IN2103
    
1- Relizar una aplicación web orientado a objeto que implemente el juego “Adivina el número”. Este
juego consiste en adivinar un número aleatorio en un máximo de 5 intentos. Tras cada intento, el
programa responde si se ha acertado o, en caso contrario, si el número a adivinar es mayor o menor
que el número propuesto por el jugador.
-->

<?php
if (!isset($try)) {
    $try= 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameFormJ.C</title>
</head>
<body>

    <h1>BIENVENIDOS AL JUEGO DE ADIVINAR EL NUMERO</h1>
    <h4>El juego consiste en adivinar un numero del 1 al 10</h4>
    <form action="" method="post">
        <input name="number" type="number" placeholder="Introduzca su numero">
        <input type="submit" value="ENVIAR NUMERO">
        <input type="hidden" name="try" value="<?php echo $try ?>">
    </form>

</body>
</html>