<?php
 
	$conn = mysqli_connect ("localhost", "root", "", "coisasemprestadas");

	if($conn == false) {
		die("ERRO: Não conseguiu conectar ao MySQL. " . mysqli_connect_error());
	}
?>