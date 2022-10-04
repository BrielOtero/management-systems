<?php

$correct =true;

if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
	$nombre= $_POST["nombre"];
}else{
	$correct =false;
}

if(isset($_POST["email"]) && !empty($_POST["email"])){
	$email= $_POST["email"];
}else{
	$correct =false;
}

if(isset($_POST["telefono"]) && !empty($_POST["telefono"])){
	$telefono= $_POST["telefono"];
}else{
	$correct =false;
}

if(isset($_POST["mensaje"]) && !empty($_POST["mensaje"])){
	$mensaje= $_POST["mensaje"];
}else{
	$correct =false;
}


if($correct){
	print "El mensaje ".$mensaje." fue enviado por ".$nombre.", telefono ".$telefono.". Su e-mail es: ".$email.". 
	Enviado el ".date("d/m/y");

}else{
	print "Los campos deben ser validos";
}


?>