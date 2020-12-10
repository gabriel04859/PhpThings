<?php
$id = (isset($_GET["id"]))?$_GET["id"]:1;
	if (!is_numeric($id)) {
		exit("Comando não autorizado");
	}

	$connection = mysqli_connect("localhost", "root", "root","123456");
	$sql = "SELECT * FROM tb_users WHERE idUser = $id"
	$exe = mysqli_query($connection,$sql);
	while ($result = mysqli_fetch_object($exe)) {
		echo $result->name."<br>";
	}
?>