<?php

    include "includes/conecta.php";
      
    require "includes/autentica.php";       
    
    $id = "";
    $nome = "";
    $descricao = "";

    //Se foi enviado ID via GET - Se é edição de itens
    if(isset($_GET['id'])) {

      //Obtém valor enviado via GET
      $id = $_GET['id'];

      $sql = "SELECT * FROM itens WHERE id = $id";

      //Envia a consulta para obter dados do item atual
      $res = mysqli_query($conn, $sql);

      //Armazena os dados obtidos
      $row = mysqli_fetch_assoc($res);

      $id = $row['id'];
      $nome = $row['nome'];
      $descricao = $row['descricao'];
    }
?>

  <?php

    include "includes/topocadastro.php";

  ?>   
    <div class="content">
      <h2>Cadastro de Itens</h2>
        <form action="recebeitens.php" method="post"> 
          <input type="hidden" name="id" value="<?php echo $id ?>"/>        
          <label for="nome">Nome:</label><br>
          <input type="text" name="nome" value="<?php echo $nome ?>"/><br><br>
          <label for="descricao">Descrição:</label><br>
          <input type="text" name="descricao" value="<?php echo $descricao ?>"/><br><br>
          <input type="submit" value="Enviar"><br><br>                  
        </form>
          <a href="listaitens.php">Cancelar</a>   
    </div>  
  </body>
</html>