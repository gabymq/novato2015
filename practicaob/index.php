<?php

	class Persona {

		//Atributos
		public $nombre = "Pedro";
		public $msg = 'moreno';

		//Metodos
		public function hablar ($mensaje){
			return $mensaje;
		}

		public function funcion ($Apellido){
			$this->msg = $Apellido;
			return $this->msg;
		}
	}


		$wei = new Persona();
		//echo $wei->nombre;

		//0echo $wei->hablar ("Hola a todos");

		echo $wei->msg;
		echo '<hr>';
		echo $wei->funcion('Velez Obando');

?>