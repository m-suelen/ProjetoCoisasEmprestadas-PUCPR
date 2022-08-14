<?php

  include "includes/topolista.php";

?>

  <?php 
    
    include "includes/menu.php";
    
    ?> 

      <?php
      
        require "includes/autentica.php";    
        
      ?>
    
</body>
  <body>
    <div class="content">
      <h2>Itens Cadastrados</h2>
        <form action="cadastroitens.php" method="post">
          <input type="submit" value="Novo Item">
        </form>      
    </div>
      
    </div> 
    
      <table id="customers">
      <tr>
        <th>ID</th>
        <th>Itens</th>
        <th>Descrição</th>        
        <th>Editar</th>
        <th>Excluir</th>
      </tr> 
      
      <?php

          include "includes/conecta.php";

        $sql = "SELECT id, nome, descricao FROM itens";

        //Envia código SQL para o MySQL
        $res = mysqli_query($conn, $sql);

        //Percorre os registros encontrados
        WHILE($row = mysqli_fetch_assoc($res)) {

          echo "<tr>
                  <td>" . $row['id'] . "</td>
                  <td>" . $row['nome'] . "</td>
                  <td>" . $row['descricao'] . "</td>     
                  <td><a href='cadastroitens.php?id=". $row['id'] . "'>Editar</a></td>
                  <td><a href='exclusaoitens.php?id=". $row['id'] . "'>Excluir</a></td>
                </tr>";
        }
      ?>

    </table>
  </body>
</html>


