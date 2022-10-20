<?php
$conexion = mysqli_connect("localhost", "root");
mysqli_select_db($conexion, "bank");

if (isset($_GET["account"]) && isset($_GET["money"])&& isset($_GET["valuemoney"])) {
	$money = (int)$_GET["money"]-(int)$_GET["valuemoney"];
	$query = "UPDATE clients SET money=$money WHERE account={$_GET["account"]}";
	mysqli_query($conexion, $query);
}

?>
<script>
	function redirigir() {

		window.location.href = '../pages/modify.php';
	}
	setTimeout(redirigir, 0);
</script>