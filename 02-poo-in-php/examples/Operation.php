<?php 
abstract class Operation{

protected $valor1;
protected $valor2;
protected

public function cargar1($valor){
	$this->valor1=$valor;
}
public function cargar2($valor){
$this->valor2=$valor;
}
public function mostrarResultado(){
print "El resultado es:".$this->resultado."br";
}

abstract public function operar();
}
//definimos las clases hijas
class Suma extends Operation{
	public function operar(){
	$this-> resultado=$this-> valor1+$this->valor2;
	}
}

	class Resta extends Operation{
	public function operar(){
	$this->resultado=$this->valor1-$this->valor1;
	}
	}

$suma=new Suma();
$suma->cargar1(10);
$suma->cargar2(15);
$suma->operar();
$suma->mostratResultado();
$resta=new Resta();
$resta->operar ();
$resta->mostrarResultado();

 ?>