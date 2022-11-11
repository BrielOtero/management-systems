<?php

/*
*Importar clases
*/
include('Vehiculo.php');
include('Cuatro_ruedas.php');
include('Coche.php');

/*
*Creo coche
*/
$coche = new Coche("verde",1400,4);
$coche->añadir_persona(65);
$coche->añadir_persona(65);
Vehiculo::ver_atributo($coche);
$coche->añadir_cadenas_nieve(2);
$coche->setColor("rojo");
Vehiculo::ver_atributo($coche);

?>