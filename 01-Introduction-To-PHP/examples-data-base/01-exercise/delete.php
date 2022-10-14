<?php
$conexion = mysqli_connect("localhost","root");
mysqli_select_db($conexion,"usuariosbd");

if(isset($_GET['id'])){


		$query = "DELETE FROM usuarios WHERE id={$_GET['id']}";

		if(mysqli_query($conexion, $query)){
			print "User Deleted";
		}else{
			print "User no Deleted";
		}
}
	

?>