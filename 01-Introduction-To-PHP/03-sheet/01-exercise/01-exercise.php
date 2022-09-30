<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<h1>Rellena el siguiente formulario para calcular el coste total del envio</h1>

	<form action="values.php" method="post">
		<p>Precio: <input type="text" name="precio"  maxlength="5"></p>
		<P>Cantidad: <input type="text" name="cantidad"  maxlength="5"></P>
		<p>Descuento: <input type="text" name="descuento"  maxlength="5"></p>
		<P>Iva: <input type="text" name="iva"  maxlength="3">%</P>
		<p>Metodo de envio:
			<select name="envio" >
				<option value="0">Recoger en tienda</option>
				<option value="5">Correos</option>
				<option value="8">Seur</option>
			</select>
		</p>
		<p><input type="submit" value="Calcular Precio Total"></p>

	</form>

</body>

</html>