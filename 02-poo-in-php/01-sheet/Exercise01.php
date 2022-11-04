<?php
class Exercise01
{
	private $enlaces = array();
	private $titulos = array();

	public function cargarOpcion($en, $tit){
		$this->enlaces[]=$en;
		$this->titulos[]=$tit;
	}

	public function mostrar(){
		for ($i=0; $i < count($this->enlaces); $i++) { 
			print "<a href=".$this->enlaces[$i].">".$this->titulos[$i]."</a><br>";
		}

	}

}
?>

