<?php
    if (empty($_GET['pagina'])) {
        $pagina = "main";
    } else {
        $pagina = $_GET['pagina'];
    }


    if (is_file("controlador/".$pagina.".php")) {
        require_once("controlador/".$pagina.".php");
    } else {
        echo "Página en costrucción";
    }

?>