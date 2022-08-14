<?php

	include "includes/topolista.php";

?>

			<?php
      
        require "includes/autentica.php";    
        
      ?>

    <div class="content">
      <h2>Itens Emprestados</h2>
      	<form action="cadastroemprestimos.php" method="post">
	  			<input type="submit" value="Novo Empréstimo">
	  		</form>      
    </div>

    	<?php 
		  
				include "includes/menu.php";
			
			?>  	

			      <table id="customers">
			      <tr>
			        <th>ID</th>
			        <th>Itens</th>			        
			        <th>Destinatário</th>		           
			        <th>Data Empréstimo</th>       
			        <th>Data Devolução</th>
			        <th>Editar</th>
			        <th>Excluir</th>
			      </tr>	

      
		      	  <?php

		          	  include "includes/conecta.php";

								
					  //Monta comando SQL para obter todos os usuários
					  $sql = "SELECT id, item_id, destinatario_id, dtemp, dtdev FROM emprestimos";
						
					  //Envia código SQL para o MySQL
					  $res = mysqli_query($conn, $sql);
						
					  //Se encontrou algum registro
					  if($res){

					  	//Percorre os registros encontrados
					  	while($row = mysqli_fetch_assoc($res)){
											
						  echo "<tr>
											<td>". $row['id'] ."</td>
											<td>". $row['item_id'] ."</td>									
											<td>". $row['destinatario_id'] ."</td>									
											<td>". $row['dtemp'] ."</td>
											<td>". $row['dtdev'] ."</td>
											<td><a href='cadastroemprestimos.php?id=". $row['id'] ."'>Editar</a></td>
											<td><a href='exclusaoemprestimos.php?id=". $row['id'] ."'>Excluir</a></td>
										</tr>";
					    }
					  }
										
	  			  	?>
	  			  </table>
	  



		