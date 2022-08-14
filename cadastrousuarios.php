<?php

    include "includes/topocadastro.php";

    include "includes/conecta.php";
      
    require "includes/autentica.php";    
        
      

    $id = "";
    $nome = "";
    $sobrenome = "";
    $contato = "";
    $email = "";
    $senha = "";

    //Se foi enviado ID via GET - se é edição
    if(isset($_GET['id'])){
      
      //Obtém valor enviado via GET
      $id = $_GET['id'];
      
      $sql = "SELECT * FROM usuarios WHERE id = $id";
      //Envia a consulta para obter dados 
      $res = mysqli_query($conn, $sql);
      //Armazena os dados obtidos
      $row = mysqli_fetch_assoc($res);
      
      $nome = $row['nome'];
      $sobrenome = $row['sobrenome'];
      $contato = $row['contato'];
      $email = $row['email'];
      $senha = $row['senha'];
      
    }

?>

  <?php 
    
    include "includes/menu.php";
    
    ?> 

</body>
  <body>
    <div class="content">
      <h2>Cadastro de Usuários</h2>
        <form action="recebeusuarios.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>" />
          <label for="nome">Nome:</label><br>
          <input type="text" name="nome" value="<?php echo $nome; ?>" /><br><br>
          <label for="sobrenome">Sobrenome:</label><br>
          <input type="text" name="sobrenome" value="<?php echo $sobrenome; ?>" /><br><br>
          <label for="contato">Contato:</label><br>
          <input type="text" name="contato" value="<?php echo $contato; ?>" /><br><br>
          <label for="email">Email:</label><br>
          <input type="email" name="email" value="<?php echo $email; ?>"  /><br><br>
          <label for="senha">Senha:</label><br>
          <input type="password" name="senha" value="<?php echo $senha; ?>" /><br><br>
          <input type="submit" value="Salvar"><br><br>
          <a href="listausuarios.php">Cancelar</a><br><br>
        </form>
    </div>  
  </body>
</html>


