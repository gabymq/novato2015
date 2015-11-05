<?php

	class Loteria{

		//Atributos
		public $numero;
		public $intentos;
		public $resultado= false;

		//Metodos
		public function __construct($numero, $intentos){
			$this->numero= $numero;
			$this->intentos= $intentos;

		}// cierre del construct

		public function Sortear(){

		$minimo= $this->numero/2;
		$maximo= $this->numero*2;
		for($i=0; $i<$this->intentos; $i ++){

			$int= rand($minimo, $maximo);
			self:: intentos($int);
		}	//cierre de for
		}	//cierre de sortear

		public function intentos($int){

			if($int== $this->numero){
				echo "<b>" . $int . " == " .$this ->numero ."</b><br>";
				$this->resultado = true;

			} //cierre de if
			else {

				echo $int . " != " . $this->numero . "<br>";
			} //cierre de else


		}
		public function __destruct(){
			if($this->resultado){
				echo "Felicidades, has ganado en: " . $this->intentos . "intentos."; 
			}//cierre de if

			else{

				echo "Que lastima, has perdido en: " . $this->intentos . "intentos.";
			}// cierre de else
		}//cierre de destruct
		}// fin de la clase
	


			$loteria= new Loteria(10,5);
			$loteria->sortear();


?>			

