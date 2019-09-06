<?php 


	class auto{
		public $Puertas;
		public $Placa;
		public $Modelo;
		public $Color;
			
		function __construct()
		{
			$this->Puertas="4";
			$this->Placa="451";
			$this->Modelo="auto";
			$this->Color="negro";
		}
			public function encender()
			{
				echo "encendiendo auto";
			}
			public function apagar()
			{
				echo "apagando auto";
			}
		public function acelerar(){
				echo "acelerando auto";
			}
			public function frenar(){
				echo "frenando auto";
			}
	}
 ?>