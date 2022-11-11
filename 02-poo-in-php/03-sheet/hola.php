<?php

$servername = "sql.freedb.tech";
$username = "freedb_srmazas";
$password = "s2r!!MyfFcK?&#$";
$base = "freedb_supermarket";

// Create connection
$conex = mysqli_connect($servername, $username, $password, $base);

$users = mysqli_query($conex,"SELECT * FROM product");

while($fila =mysqli_fetch_array($users)){
	print $fila["name"]."<br>";
}

?>