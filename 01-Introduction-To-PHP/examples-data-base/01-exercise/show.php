<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php
$conexion = mysqli_connect("localhost","root");
mysqli_select_db($conexion,"usuariosbd");

$users = mysqli_query($conexion,"SELECT * FROM usuarios");

while($fila =mysqli_fetch_array($users)){
	print $fila["id"]."   ".$fila["Nombre"]."   ".$fila["Apellidos"]."   ".$fila["Correo"]."<br>";
	print "<a href=\"update.php?id={$fila['id']}\">Update</a><br>";
	print "<a href=\"delete.php?id={$fila['id']}\">Delete</a><br>";
	print "<br><br><hr>";
}

mysqli_close($conexion);
?>
	
</body>
</html>