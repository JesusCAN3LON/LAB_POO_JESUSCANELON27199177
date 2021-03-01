<?php
class VehiculoRC{
    //Atributes
    private $name;
    private $typeV;
    private $typeC;

    //Methods
    public function __construct($name, $typeV, $typeC)
    {
        $this->name= $name;  
        $this->typeV= $typeV;
        $this->typeC= $typeC;
    }

    public function getTypeC(){
        return $this->typeC;
    }

    public function getOFF(){
        return false;
    }

    public function getRUN(){
        return 'Acelerando vehiculo..';
    }

    public function getREVERSE(){
        return 'Retrocediendo vehiculo..';
    }

    public function getRIGHT(){
        return 'Cruzando a la derecha..';
    }

    public function getLEFT(){
        return 'Cruzando a la izquierda..';
    }
}

?>