<?php



	function autoload($clase){
		include  "autoload/"   . $clase . ".php";
	}//fin autoload

	spl_autoload_register('autoload');

	Auto::mostrar("Hola Mundo");
	Persona:: mostrar("Codigo Facilito");


?>
