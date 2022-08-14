<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/login.css" rel="stylesheet">  
  <title>Tela de Login</title>  
</head>
<body>
  <div>    
    <h1>Login</h1>      

      <?php
      
        //Se foi enviado parâmetro de erro - se não autenticou
        if(isset($_GET['erro'])){
          echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
        }                      
      
      ?>
    <form action="recebelogin.php" method="post">
      <label for="email">Seu e-mail:</label><br>
      <input type="email" name="email"/><br><br>
      <label for="senha">Sua senha:</label><br>
      <input type="password" name="senha"/><br><br>
      <input type="submit" value="Entrar"><br><br>
      <a href="index.php">Voltar</a>
    </form>
  </div>  
</body>
</html>