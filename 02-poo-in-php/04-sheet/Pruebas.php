<?php

include_once 'Almacen.php';
include_once 'BebidasAzucaradas.php';
include_once 'AguaMineral.php';


$b1 = new BebidasAzucaradas(10, false, 1, 3, 10, "Coca");
$b2 = new BebidasAzucaradas(5, true, 2, 6, 15, "Fanta");

$a1 = new AguaMineral("Del Monte", 3, 2, 10, "AquaBona");

$almacen = new Almacen();
$almacen->agregarProducto($b1);
$almacen->agregarProducto($b2);
$almacen->agregarProducto($a1);
$almacen->calcularPrecioTodasBebidas();
$almacen->calcularPrecioTotalEstanteria(0);
$almacen->calcularPrecioTotalMarcaBebida("Coca");
$almacen->mostrarInformacion();

?>