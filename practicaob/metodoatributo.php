<?php

	class Persona{

		//Atributos
		public $nombre=[];
		public $apellido=array();

		//Metodos
		public function guardar ($nombre, $apellido){

			$this->nombre[]= $nombre;
			$this->apellido[]= $apellido;
		}

		public function mostrar(){
			for($i=0; $i<count($this->nombre); $i++){
			
			$this ->formato($this->nombre [$i], $this->apellido [$i]);

			}
		}

		public function formato($nombre, $apellido){
		echo "Nombre: " . $nombre. " | Apellido: " . $apellido . "<br>";

		}//fin formato

	}//fin clase

		$persona= new Persona();
		$persona->guardar("Carlos", "Fernandes");
		$persona->guardar("Uriel", "Hernandez");
		$persona->mostrar();
?>		