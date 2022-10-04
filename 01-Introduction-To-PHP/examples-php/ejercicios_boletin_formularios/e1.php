<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['precio']) && !empty($_POST['precio'])){
    $precio = intval($_POST['precio']);
}

$cantidad = intval($_POST['cantidad']);
$descuento = intval($_POST['descuento']);
$iva = intval($_POST['iva'])/100;
$envio = $_POST['envio'];
$precioenvio=0;
switch ($envio) {
    case strcmp($envio, "tienda"):
        $precioenvio = 0;
        break;
    case strcmp($envio, "correos"):
        $precioenvio = 5;
        break;
    case strcmp($envio, "seur"):
        $precioenvio = 8;
        break;
}


$precio_total = ($precio * $cantidad - $descuento) *(1+$iva) + ($precioenvio);
print 'El precio total del envío es: ' . $precio_total;
?>