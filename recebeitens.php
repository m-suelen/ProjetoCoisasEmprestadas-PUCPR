<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];

	//Se ID estiver vazio - então é INSERT
	if(empty($id)) {

		//Cria o SQL para inserir os dados do formulário no MySQL
		$sql = "INSERT INTO itens (nome, descricao) VALUES
					('$nome', '$descricao')";

		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);

		//Se inseriu com Sucesso
		if($res) {

			//Redireciona usuário para a listagem
			header("location: listaitens.php");
		}
		else {
			echo "ERRO AO INSERIR!";
		}

	}
	else {
		$sql = "UPDATE itens SET 
					nome = '$nome',
					descricao = '$descricao'
				WHERE id = $id";

		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);

		//Se atualizou com Sucesso
		if($res) {

			//Redireciona usuário para a listagem
			header("location: listaitens.php");
		}
		else {
			echo "ERRO AO ATUALIZAR!";
		}
	}

 	/*
	echo "Nome: " . $_POST['nome'] . "<br>";
	echo "Descrição: " . $_POST['descricao'] . "<br>";
	*/
?>
