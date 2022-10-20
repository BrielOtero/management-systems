<script>
	function redirigir() {

		window.location.href = '../pages/modify.php';
	}
</script>


<?php

function checkValue($value)
{
	if (isset($_POST[$value]) && !empty($_POST[$value])) {
		return false;
	} else {
		return true;
	}
}

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


	if (!$error) {

		$query = "UPDATE clients SET name='$name', firstsurname='$firstsurname', secondsurname='$secondsurname', dni='$dni', phone='$phone', email='$email', address='$address', money='$money' WHERE account={$_POST["account"]};";

		mysqli_query($conexion, $query);

		// if (mysqli_query($conexion, $query)) {
		// 	print "<p>User updated correctly</p>";
		// } else {
		// 	print "<p>ERROR</p>";
		// }
	}
} else {
	// print "<p style=\"color:red;\">Values are not valid</p>";
	$error = true;
}

mysqli_close($conexion);
?>

<script>
	setTimeout(redirigir, 0);
</script>