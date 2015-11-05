<?php

	interface Auto{
		public function encender();
		public function apagar();
	}//fin auto

	interface gasolina extends Auto{
		public function vaciarTanque();
		public function llenarTanque($cant);
	}//fin gasolina

	class Deportivo implements gasolina{

		private $estado= false;
		private $tanque= 0;

		public function estado(){
			if($this->estado)
				print "El auto esta encendido y tiene: " . $this->tanque . " de litros en el tanque. <br>";
			else
				print "El auto esta apagado <br>";
		}//fin estado

		public function encender (){
			if($this ->estado){
				print "No puedes encender el auto dos veces <br>";
			}
			else {
				if($this->tanque<=0){
					print "Usted no puede encender el auto porque el tanque esta vacio <br>";
				}
				else{
					print "Auto encendido <br>";
					$this->estado= true;
				}
			}
		}//fin de encender

		public function apagar(){
			if($this->estado){
				print "Auto apagado <br>";
				$this->estado=false;
			}
			else{
				print "El atuo ya esta apagado <br>";
				$this->estado= true;
			}

		}//fin apagar

		public function vaciarTanque(){
			$this->tanque= 0;
		}//fin vaciar tanque

		public function llenarTanque($cant){
			$this->tanque= $cant;
		}//fin llentar tanque

		public function usar($km){
			if($this->estado){
				$reducir=$km/3;
				$this->tanque=$this->tanque-$reducir;
				if($this->tanque<=0){
					$this->estado= false;
				}
			}
			else{
				print "El auto ya esta apagado y no se puede usar <br>";
			}

		}//fin usar
	}//fin deportivo

	$obj = new Deportivo();
	$obj->llenarTanque(300);
	$obj->encender();
	$obj->usar(350);
	$obj->estado();
?>