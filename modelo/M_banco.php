<?php

class Banco{
    //Atributes
    private $saldo;
    private $name;
    private $cedula;
    private $tipoC;
    private $monto;

    //Methods
    function __construct($name, $cedula, $tipoC, $saldo)
    {
        $this->name= $name;
        $this->cedula= $cedula;
        $this->tipoC= $tipoC;
        $this->saldo= $saldo;
    }

    function getName(){
        return $this->name;
    }

    function getTipoC(){
        return $this->tipoC;
    }

    function getSaldo(){
        return $this->saldo;
    }

    function getIngreso($monto){
        return $this->saldo+= $monto;
    }

    function getRetiro($monto){
        return $this->saldo+= $monto;
    }

    function getConsulta(){
        return false;
    }

}
?>