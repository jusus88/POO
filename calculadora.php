<?php 

class calculadora{
	private $c1;
	private $c2;

	function __construct()
	{
		extract($_GET);
		$this->c1=$Cant1;
		$this->c2=$Cant2;
		$this->op=$op;
			
	}

	public function operar()
	{
		$proceso=["",
		$this->sum(),
		$this->res(),
		$this->multiplicar(),
		];

	}


	private function sum(){
		return $this->c1+$this->c2;
	}
	private function res(){
		return $this->c1-$this->c2;
	}
	private function multiplicar(){
		return $this->c1*$this->c2;
	}
}


 ?>