<?php
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	//Conecta com a base de dados
	include "includes/conecta.php";
	
	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$res = mysqli_query($conn, $sql);
	
	//Obtém QTDE de registros encontrados
	$qtdeRegistros = mysqli_num_rows($res);
	
	//Encontrou login e senha compatíveis
	if($qtdeRegistros > 0){
		
		//Inicia a sessão
		session_start();
		
		//Obtém dados do usuário
		$row = mysqli_fetch_assoc($res);
		
		//Armazena informaçoes do usuário na Sessão
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];
		
		header("Location: inicio.php");
	}
	else{
		header("Location: login.php?erro=1");
	}

?>