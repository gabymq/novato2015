<?php

	class Vehiculo{

		//atributos
		public $motor= false;
		public $marca;
		public $color;

		//metodos
		public function estado(){

			if($this->motor)
				echo "El motor esta encendido <br>";

			else
				echo "El motor esta apagado<br>";
			
		}//fin de estado

		public function encender(){

			if($this -> motor){
				echo "Cuidado el motor ya esta prendido <br>";
			}//cierre de if
			else{
				echo "El motor esta encendido <br>";
				$this->motor= true;
			} //cierre de else
		}//cierre de estado
	}//cierre de vehiculo

	class Moto extends Vehiculo{

		public function estadoMoto(){
			$this -> estado();
		}//cierre estado moto
	}//cierre moto

	class cuatriMoto extends Moto{

	}//fin de clase cuatrimoto

	//$vehiculo = new Vehiculo();
	//$vehiculo->estado();
	//$vehiculo->encender();
	//$vehiculo->estado();

	//$moto = new Moto();
	//$moto->estado();
	//$moto-> estadoMoto();

	$moto= new CuatriMoto();
	$moto->estado();

?>
