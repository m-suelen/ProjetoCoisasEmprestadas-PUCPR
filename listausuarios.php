<?php

	include "includes/topolista.php";

?>

			<?php
      
        require "includes/autentica.php";    
        
      ?>

    <div class="content">
      <h2>Usuários Cadastrados</h2>
      	<form action="cadastrousuarios.php" method="post">
	  			<input type="submit" value="Novo Usuário">
	  		</form>      
    </div>
      
    </div>

    	<?php 
		  
				include "includes/menu.php";
			
			?>

  	
	      <table id="customers">
	      <tr>
	        <th>ID</th>
	        <th>Nome</th>
	        <th>Sobrenome</th>
	        <th>Contato</th>   
	        <th>Email</th>   
	        <th>Senha</th>       
	        <th>Editar</th>
	        <th>Excluir</th>
	      </tr>	

  
      	<?php

          	include "includes/conecta.php";				 		
						
			  //Monta comando SQL para obter todos os usuários
			  $sql = "SELECT id, nome, sobrenome, contato, email, senha FROM usuarios";
				
			  //Envia código SQL para o MySQL
			  $res = mysqli_query($conn, $sql);
				
			  //Se encontrou algum registro
			  if($res){

			  	//Percorre os registros encontrados
			  	while($row = mysqli_fetch_assoc($res)){
									
				  echo "<tr>
							<td>". $row['id'] ."</td>
							<td>". $row['nome'] ."</td>
							<td>". $row['sobrenome'] ."</td>
							<td>". $row['contato'] ."</td>
							<td>". $row['email'] ."</td>
							<td>". $row['senha'] ."</td>
							<td><a href='cadastrousuarios.php?id=". $row['id'] ."'>Editar</a></td>
							<td><a href='exclusaousuarios.php?id=". $row['id'] ."'>Excluir</a></td>
								</tr>";
			    }
			  }
								
			  ?>
			  </table>
	    


		