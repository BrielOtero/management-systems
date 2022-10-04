<?php

$correct =true;

if(isset($_POST["precio"]) && !empty($_POST["precio"])){
	$precio= intval($_POST["precio"]);
}else{
	$correct =false;
}

if(isset($_POST["cantidad"]) && !empty($_POST["cantidad"])){
	$cantidad= intval($_POST["cantidad"]);
}else{
	$correct =false;
}

if(isset($_POST["descuento"]) && !empty($_POST["descuento"])){
	$descuento= intval($_POST["descuento"]);
}else{
	$correct =false;
}

if(isset($_POST["iva"]) && !empty($_POST["iva"])){
	$iva= intval($_POST["iva"]);
}else{
	$correct =false;
}

if(isset($_POST["envio"])){
	$envio= intval($_POST["envio"]);
}else{
	$correct =false;
	
}

if($correct){
	print "El precio es ". (($precio+$precio*$iva)-$descuento)*$cantidad+$envio;

}else{
	print "Los campos deben ser validos";
}


?>