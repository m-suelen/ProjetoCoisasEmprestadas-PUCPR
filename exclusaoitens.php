<?php

	$conn = mysqli_connect ("localhost", "root", "", "coisasemprestadas");

	if($conn == false) {
		die("ERRO: Não conseguiu conectar ao MySQL. " . mysqli_connect_error());
	}

	$id = $_GET['id'];

	$sql = "DELETE FROM  itens WHERE id = $id";

	$res = mysqli_query($conn, $sql);

	header("location: listaitens.php");

?>