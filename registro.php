<?php 
class usuario{
	private $Nombres;
	private $Apellidos;
	private $Dni;
	private $Sexo;
	function __construct()
	{
		extract($_GET);
		$this->Nombres=$Nombres;
		$this->Apellidos=$Apellidos;
		$this->Dni=$Dni;
		$this->Sexo=$Sexo;

	}
	function _print()
	{
		$Sexo=["f"=>"Femenino",
		"m"=>"Masculino"];
	echo "Usuario: <hr/>",$this->Nombres;
	echo "",$this->Apellidos;
	echo "<br/>  con DNI: ",$this->Dni;
	echo "<br/> Sexo: ",$Sexo[$this->Sexo];
	}
}

 ?>