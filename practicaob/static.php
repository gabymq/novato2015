<?php

	class Pagina{

		//atributos
		public $nombre = "Codigo Facilito";
		public static $url = "www.codigofacilito.com";

		//metodos
		public function bienvenida(){

			echo "Bienvenidos a <b>" . $this->nombre . "</b> la pagina es <b>" . Pagina::$url ."<b></b>";
		}//fin de bienvenida


		public static function bienvenida2(){

			echo "Bienvenidos:" . self::$url;
		}
	}


	class Web extends Pagina{

	}//fin de la calse	


		//$pagina= new Pagina();
		//$pagina ->bienvenida();


		Web::bienvenida2();
?>