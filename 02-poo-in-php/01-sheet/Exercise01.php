<?php
class Exercise01
{
	private $enlaces = array();
	private $titulos = array();

	public function cargarOpcion($en, $tit){
		$this->enlaces[]=array_push($en);
		$this->titulos[]=array_push($tit);
	}

	public function mostrar(){
		for ($i=0; $i < count($this->enlaces); $i++) { 
			print "<a href=".$this->enlaces[$i].">".$this->titulos[$i]."</a><br>";
		}

	}

}
?>

