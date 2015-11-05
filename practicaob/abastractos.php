<?php

	abstract class Molde{

		abstract public function ingresarNombre($nombre);
		abstract public function obtenerNombre();
}
	class Persona extends Molde{

		private $mensaje= "Hola gente de codigofaclilito";
		private $nombre;
		public function mostrar(){
			print $this->mensaje;
		}//fin persona

		public function ingresarNombre($nombre){
			$this->nombre= $nombre;

		}//fin de ingresar nombre

		public function obtenerNombre(){
			print $this->nombre . $this->mensaje;
		}//fin de obtener nombre
	}//fin molde	

		//public static function mensaje($mensaje){

			//print $mensaje;
		//}//fin mensaje
	//}//fin de abstract moolde

	//Molde::mensaje("Hola Mundo");


$obj= new Persona();
//$obj->mostrar();
$obj->ingresarNombre("Carlos");
$obj->obtenerNombre();
?>
