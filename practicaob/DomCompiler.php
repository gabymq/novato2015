<?php
class Dom{
	//atributos
	private $NL = "\n";
	private $init_dimension = ['y'=>0,'x'=>0];
	private $reques_dimensions = [];
	private $normal_tags = ['div'];
	private $self_closed = ['img'];
	//atributos

	//metodos
/*	NI IDEA DE COMO HACER ESTO :/
	public function dimensional($request=FALSE){
		if($request===FALSE){
			$msg = 'nada por hacer';
		}//nada q hacer
		elseif(is_array($request){
			foreach ($request as $y => $valuey) {
			}//fin analisis en Y
		}//es array
	}//dimensional */

	private function sintactica($tag_name){
		//1er analisis: es un tag que existe
		$sintax['valid_tag'] = (array_search($tag_name, array_merge($this->normal_tags,$this->self_closed))!==FALSE)?TRUE:FALSE;
		//2do analisis: es normal o self-closed
		if($sintax['valid_tag']){
			$sintax['type'] = (array_search($tag_name, $this->normal_tags)!==FALSE)?'normal':'self-closed';
		}
		return $sintax;
	}//sintactica

	public function porcion($tag_name=FALSE,$attrib=FALSE,$text=FALSE){
		$nl = $this->NL;
		$attrib	= ($attrib===FALSE)?'':$attrib;
		$text	= ($text===FALSE)?'':$text;
		$fragmento = '';
		if(is_string($tag_name)&&$this->sintactica($tag_name)['valid_tag']){
			if($this->sintactica($tag_name)['type']==='normal'){
				$fragmento = '<'.$tag_name.' '.$attrib.'>'.$text.'</'.$tag_name.'>'.$nl;
			}//tag normal
			elseif($this->sintactica($tag_name)['type']==='self-closed') {
				$fragmento = '<'.$tag_name.' '.$attrib.' />'.$nl;
			}//tag self-closed
		}//fin es string y un tag valido
		return $fragmento;
	}//porcion

	public function concat(){

	}//concat
	//Metodos
}//fin de la clase

$obj = new Dom;
echo $obj->porcion('div','ng-repeat','Contenido textual del tag');
//var_dump($obj->sintactica('img'));
?>