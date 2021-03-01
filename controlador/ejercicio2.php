<?php
if (is_file('vista/ejercicio2.php')) {
    if (!empty($_POST)) {
        require_once 'modelo/M_ejercicio2.php';

        if (isset($_POST['nameV'])) {
            $name= $_POST['nameV'];
        } else{
            $name= $_POST['nombre'];
        }

        if (isset($_POST['tipoVehiculo'])) {
            $typeV= $_POST['tipoVehiculo'];
        } else{
            $typeV= $_POST['tipoV'];
        }

        if (isset($_POST['tipoColor'])) {
            $typeC= $_POST['tipoColor'];
        } else{
            $typeC= $_POST['tipoC'];
        }

        $objVehiculo= new VehiculoRC($name, $typeV, $typeC);
        
        $acelerar= $objVehiculo->getRUN();
        $retroceder= $objVehiculo->getREVERSE();
        $derecha= $objVehiculo->getRIGHT();
        $izquierda= $objVehiculo->getLEFT();


        if (isset($_POST['apagar'])) {
            $ON = $objVehiculo->getOFF();
        } else {
            $ON=true;
        }

        if (isset($_POST['acelerar'])) {
            echo '<h3>'.$acelerar.'</h3>';
        }elseif (isset($_POST['retroceder'])) {
            echo '<h3>'.$retroceder.'</h3>';
        }elseif (isset($_POST['derecha'])) {
            echo '<h3>'.$derecha.'</h3>';
        }elseif (isset($_POST['izquierda'])) {
            echo '<h3>'.$izquierda.'</h3>';
        }

        require_once 'vista/V_ejercicio2.php';
    }else{
        require_once 'vista/ejercicio2.php';
    }
}else{
    echo 'Error ha ocurrido algo en el procedimiento :(';
}


?>