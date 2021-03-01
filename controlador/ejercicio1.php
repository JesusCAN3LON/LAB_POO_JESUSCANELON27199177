<?php
if (is_file('vista/ejercicio1.php')) {
    if (!empty($_POST)) {
        require_once 'modelo/M_ejercicio1.php';

        if ($_POST['try']<5) {
            $try= $_POST['try'];
            $try++;

            $objGame= new Game($_POST['number']);

            if (!isset($_POST['numberRandom'])) {
                $numberRandom= $objGame->getRandom();
            } else{
                $numberRandom= $_POST['numberRandom'];
            }

            $condition= $objGame->validate($numberRandom);

            require_once 'vista/V_ejercicio1.php';
        }else{
            echo 'Usted ha perdido, puede volver a intentarlo :(';
        }
    }else{
        require_once 'vista/ejercicio1.php';
    }
}else{
    echo 'Error ha ocurrido algo en el procedimiento :(';
}
?>