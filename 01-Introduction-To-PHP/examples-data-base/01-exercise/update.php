<?php
$conexion = mysqli_connect("localhost","root");
mysqli_select_db($conexion,"usuariosbd");

if(isset($_GET['id'])){
	$query = "SELECT Nombre,Apellidos,Correo FROM usuarios WHERE id={$_GET['id']}";
	if($registration=mysqli_query($conexion,$query)){
		$fila = mysqli_fetch_array($registration);

		print "<form action=\"update.php\" method=\"post\">";
		print"<p>Name: <input type=\"text\" name=\"name\" value=".$fila["Nombre"]."></p>";
		print"<p>Apellidos: <input type=\"text\" name=\"surname\" value=".$fila["Apellidos"]."></p>";
		print"<p>Email: <input type=\"email\" name=\"email\" value=".$fila["Correo"]."></p>";
		print"<p><input type=\"hidden\" name=\"id\" value=".$_GET["id"]."></p>";
		print"<p><input type=\"submit\" value=\"UPDATE\"></p>";
		print "</form>";
	}else{
		print "<p>Error".mysqli_error($conexion)."</p>";
	}
}else if(isset($_POST['id'])){
	$error=false;

	if(!empty($_POST['name']) &&!empty($_POST['surname'])&&!empty($_POST['email'])){
		$name = mysqli_real_escape_string($conexion, trim($_POST["name"]));
		$surname = mysqli_real_escape_string($conexion, trim($_POST["surname"]));
		$email = mysqli_real_escape_string($conexion, trim($_POST["email"]));
	}else{
		print "request not complete";
		$error = true;
	}

	if(!$error){
		$query = "UPDATE usuarios SET Nombre='$name', Apellidos='$surname',Correo='$email' WHERE id={$_POST['id']}";
		$registrer = mysqli_query($conexion,$query);

		if(mysqli_affected_rows($conexion)==1){
			print "User updated";
		}else{
			print "User no updated";
		}
	}
}

?>
