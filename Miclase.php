<?php 

  class Miclase{
//atributos
	
	public $color;
	public $tamaño;
	public $material;
	
	//constructor
	function __construct($c="black",$t="tamaño",$m="plastico"){

		$this->color=$c;
		$this->tamaño=$t;
		$this->material=$m;
		
	}	
	
	//metodos
	public function info(){
		echo "objeto php";
	}

}


 ?>

