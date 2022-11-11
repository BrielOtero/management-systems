<?php

class Libro
{
	private $autor;
	private $titulo;
	private $paginas;
	private $refLibro;
	private $prestado;
	private $contieneCD;

	public function __construct()
	{
		$this->refLibro = "";
		$this->prestado=0;
		$this->contieneCD=false;
	}

	public function setRefLibro($refLibro)
	{
		if (strlen($this->refLibro) > 3) {
			$this->refLibro = $refLibro;
		} else {
			print "Error with Reference Libro";
		}
	}

	public function setPrestado(){

		$this->prestado++;
	}

	public function getPrestado(){
		return $this->prestado;
	}

	public function getAutor()
	{
		return $this->autor;
	}

	public function getTitulo()
	{
		return $this->titulo;
	}

	public function getPaginas()
	{
		return $this->paginas;
	}

	public function printAutor()
	{
		print $this->autor;
	}

	public function printTitulo()
	{
		print $this->titulo;
	}

	public function printLibro()
	{
		print $this->titulo . " escrito por " . $this->autor . " con " . $this->paginas." prestado ".$this->prestado;

		if (strlen($this->refLibro) > 0) {
			print $this->refLibro;
		}
	}

}
?>