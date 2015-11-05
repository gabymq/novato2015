<?php

	trait Persona2{

		public $nombre;
		public function mostrarNombre(){
			echo $this->nombre;
		}//fin msostrar nombre

		abstract function asigarNombre($nombre);
	}//fin abstract

	trait Trabajador{
		protected function mensaje(){
			echo "Mi nombre es: ";
		}//fin mensaje
	}//fin trabajador

	class Persona{
		use Persona2, Trabajador;
		public function asigarNombre($nombre){
			$this->nombre = self:: mensaje() . $nombre;

		}//fin de asigarnombre
	}//fin de clase

	$persona= new Persona();
	$persona-> asigarNombre("Carlos");
	$persona-> mostrarNombre();


?>
