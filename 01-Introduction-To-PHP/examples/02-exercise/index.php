<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	include 'tableNumbers.php';
	?>
</head>

<body>
	<table  style=" border: 1px solid black;">
		<tr>
			<td>N</td>
			<td>Square</td>
			<td>Cube</td>
		</tr>
		<?php 
		create(5);
		?>
	</table>

</body>

</html>