<?php

$bidimensional=array(
	array("Paco","Martinez",18),
	array("Pedro","Otero",28),
	array("Laura","Gomez",38),
	array("Lucisa","Perez",48),
);

for ($i=0; $i < count($bidimensional); $i++) { 

	for ($j=0; $j < count($bidimensional[$i]); $j++) { 
		printf("<br>%s",$bidimensional[$i][$j]);

	}
	
}
?>