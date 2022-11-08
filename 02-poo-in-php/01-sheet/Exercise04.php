<?php

class Exercise04
{
	private $bidimensional = array();
	private $filas;
	private $columnas;

	public function __construct($filas, $columnas)
	{
		$this->filas = $filas;
		$this->columnas = $columnas;
	}

	public function show()
	{
		print "<table>";
		for ($j = 0; $j <= $this->filas-1; $j++) {
			printf("<tr>");
			for ($i = 0; $i <= $this->columnas-1; $i++) {
				printf("<td style=\" border: 1px solid black;\">%-3d</td>", $this->bidimensional[$j][$i]);
			}
			printf("</tr>");
			
		}
		print "</table>";
	}

	public function load($fila, $columnas, $value)
	{
		$this->bidimensional[$fila][$columnas] = $value;
	}

}
?>