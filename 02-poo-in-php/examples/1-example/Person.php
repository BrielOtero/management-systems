<?php
class Person
{
	private $nombre;
	private $apellidos;
	private$edad;
	public static $saludo = "Hola a todos";
	public function __construct($nombre, $apellidos, $edad)
	{
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->edad = $edad;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		return $this->nombre = $nombre;
	}
	public function getApellidos()
	{
		return $this->apellidos;
	}

	public function setApellidos($apellidos)
	{
		return $this->apellidos = $apellidos;
	}
	public function getEdad()
	{
		return $this->edad;
	}

	public function setEdad($edad)
	{
		return $this->edad = $edad;
	}

	public function mayorEdad()
	{
		return $this->edad >= 18;
	}
	public function nombreCompleto()
	{
		print "El nombre es " . $this->nombre . " con apellidos " . $this->apellidos . " con el siguiente saludo " . self::$saludo;
	}
}

$person1 = new Person("Gabriel", "Otero", 25);

if($person1->mayorEdad()){
	print $person1->nombreCompleto()."es mayor edad";
}else{
	print $person1->nombreCompleto()."es menor edad";
}
