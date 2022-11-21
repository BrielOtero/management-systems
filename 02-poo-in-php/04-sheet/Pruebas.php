<?php

include_once 'Almacen.php';
include_once 'BebidasAzucaradas.php';
include_once 'AguaMineral.php';


$almacen1 = new Almacen(3, 2);

//Declaramos unas cuantas bebidas de prueba
$agua1 = new AguaMineral("Galicia", 1.5, 3, "Sousas");

$azucarada1 = new BebidasAzucaradas(5, true, 2, 10, "CocaCola");
$azucarada2 = new BebidasAzucaradas(5, false, 2, 5, "CocaCola");


$almacen1->agregarProducto($agua1);
$almacen1->agregarProducto($agua1);
$almacen1->agregarProducto($azucarada1);
$almacen1->agregarProducto($azucarada2);
$almacen1->agregarProducto($agua1);

$almacen1->mostrarInformacion();



print('El precio total es '.$almacen1->calcularPrecio(). '<br>');

print ('El precio de la estantería 1 es '. $almacen1->calcularPrecioEstanteria(1).'<br>');

print ('El precio de la marca Cocacola es '. $almacen1->calcularPrecioMarca('CocaCola').'<br>');

print 'Elimino el producto con id=1';
$almacen1->eliminarProducto('1');

$almacen1->mostrarInformacion();

$almacen1->agregarProducto($azucarada2);
$almacen1->agregarProducto($agua1);
$almacen1->agregarProducto($agua1);
$almacen1->mostrarInformacion();

?>