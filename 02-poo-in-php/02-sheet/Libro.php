<?php

class Libro
{
	private $autor;
	private $titulo;
	private $paginas;
	private $refLibro;

	public function __construct()
	{
		$this->refLibro = "";
	}

	public function setRefLibro($refLibro)
	{
		if (strlen($this->refLibro) > 3) {
			$this->refLibro = $refLibro;
		} else {
			print "Error with Reference Libro";
		}
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
		print $this->titulo . " escrito por " . $this->autor . " con " . $this->paginas;

		if (strlen($this->refLibro) > 0) {
			print $this->refLibro;
		}
	}

}
?>