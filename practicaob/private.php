<?php

	class facebook{


		//Atributos
		public $nombre;
		public $edad;
		private $pass; //contrasena

		//xmlrpc_parse_method_descriptions
		public function __construct($nombre, $edad, $pass){

			$this->nombre = $nombre;
			$this->edad= $edad;
			$this->pass =$pass;
		} //fin de contruct

		public function verInformacion(){

			echo "Nombre:" . $this->nombre . "<br>";
			echo "Edad:" . $this->edad . "<br>";
			$this->cambiarPass("54321");
			echo "Password: " . $this->pass . "";
		}//fin de ver informacion

		private function cambiarPass($pass){
			$this->pass=$pass;
		}//fin de cambiar pass
	}//fin de la clase

	$facebook = new facebook("Gaby Moreno", 34, "1234");
	//echo $facebook->pass;
	//$facebook-> cambiarPass("4321");
	$facebook->verInformacion();

?>	
