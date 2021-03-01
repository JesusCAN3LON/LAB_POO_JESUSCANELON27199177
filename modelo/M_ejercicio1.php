<?php
class Game{
    //Atributes
    public $numberRandom;
    public $number;

    //Methods
    function __construct($number){
        $this->number= $number;
        $this->numberRandom= mt_rand(1,10);
    }

    public function getRandom(){
        return $this->numberRandom;
    }

    public function validate($numberRandom){
        if ($this->number<$numberRandom){
            echo 'El numero es mayor, vuelva a intentar';
            return false;
        } elseif($this->number>$numberRandom){
            echo 'El numero es menor, vuelva a intentar';
            return false;
        } elseif ($this->number==$numberRandom){
            echo 'Felicidades! Ha acertado el numero del juego';
            return true;
        }
    }
}
?> 