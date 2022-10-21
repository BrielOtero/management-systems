<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<?php
	function checkValue($value)
	{
		if (isset($_POST[$value]) && !empty($_POST[$value])) {
			return false;
		} else {
			return true;
		}
	}
	?>

	<script>
		function redirigir() {

			window.location.href = '../pages/sign-up.html';
		}
	</script>
</head>

<body>


	<?php

	$conexion = mysqli_connect("localhost", "root");
	mysqli_select_db($conexion, "bank");

	$error = false;
	$values = array("name", "firstsurname", "secondsurname", "dni", "phone", "email", "address", "account", "money");

	for ($i = 0; $i < count($values); $i++) {
		if (!$error) {

			$error = checkValue($values[$i]);
		}
	}

	if (!$error) {

		$name = trim($_POST["name"]);
		$firstsurname = trim($_POST["firstsurname"]);
		$secondsurname = trim($_POST["secondsurname"]);
		$dni = trim($_POST["dni"]);
		$phone = trim($_POST["phone"]);
		$email = trim($_POST["email"]);
		$address = trim($_POST["address"]);
		$account = trim($_POST["account"]);
		$money = trim($_POST["money"]);

		$queryUser = "SELECT * FROM clients";
		$users = mysqli_query($conexion, $queryUser);


		while ($fila = mysqli_fetch_array($users)) {
			if ($fila["account"] == $account) {
				print "There is a user with this account";
				$error = true;
				break;
			}
		}


		if (!$error) {

			$query = "INSERT INTO clients (id,name,firstsurname,secondsurname,dni,phone,email,address,account,money) VALUES (0,'$name','$firstsurname','$secondsurname','$dni','$phone','$email','$address','$account','$money')";

			if (mysqli_query($conexion, $query)) {
				print "<p>User added correctly</p>";
			} else {
				print "<p>ERROR</p>";
			}
		}
	} else {
		print "<p style=\"color:red;\">Values are not valid</p>";
		$error = true;
	}

	mysqli_close($conexion);
	?>
	<script>
		setTimeout(redirigir, 1000);
	</script>

</body>

</html>