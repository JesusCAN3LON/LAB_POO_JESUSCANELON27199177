<?php

class Calculator{
	//Atributes
	private $num1;
	private $num2;

	//Methods
	function __construct($num1, $num2){
		$this->num1= $num1;
		$this->num2= $num2;
	}

	public function sum(){
		return $this->num1+$this->num2;
	}

	public function substraction(){
		return $this->num1-$this->num2;
	}

	public function multiply(){
		return $this->num1*$this->num2;
	}

	public function divide(){
		if ($this->num2!= 0){
			return $this->num1+$this->num2;
		}else{
			return "Error, no se puede dividir entre 0";
		}
	}
}
?>