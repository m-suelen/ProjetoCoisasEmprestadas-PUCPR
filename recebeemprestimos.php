<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$item_id = $_POST['item_id'];	
	$destinatario_id = $_POST['destinatario_id'];	
	$dtemp = $_POST['dtemp'];
	$dtdev = $_POST['dtdev'];

	//Se ID estiver vazio - então é INSERT
	if(empty($id)) {

		//Cria o SQL para inserir os dados do formulário no MySQL
		$sql = "INSERT INTO emprestimos (item_id, destinatario_id, dtemp, dtdev) VALUES
						('$item_id','$destinatario_id', '$dtemp', '$dtdev')";

		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);

		//Se inseriu com Sucesso
		if($res) {

			//Redireciona usuário para a listagem
			header("location: listaemprestimos.php");
		}
		else {
			echo "ERRO AO INSERIR!";
		}

	}
	else {
		$sql = "UPDATE emprestimos SET 
					item_id = '$item_id',					
					destinatario_id = '$destinatario_id',					
					dtemp = '$dtemp',
					dtdev = '$dtdev'
				WHERE 
					id = $id";

		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);

		//Se atualizou com Sucesso
		if($res) {

			//Redireciona usuário para a listagem
			header("location: listaemprestimos.php");
		}
		else {
			echo "ERRO AO ATUALIZAR!";
		}
	}
?>
