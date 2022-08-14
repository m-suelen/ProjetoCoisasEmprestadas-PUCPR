<?php

    if(isset($_GET['autentica'])){
          echo '<br><p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
        }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Tela de Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
  <div class="sidenav">  
  </div>
    <div class="content">
      <h2>Coisas Emprestadas</h2>
      <p>Um espeço para você emprestar itens com facilidade. Para acessar a página faça o login.</p>
    </div>
</body>
  <body>
    <form action="login.php" method="post">
      <div>    
        <input type="submit" value="Fazer Login">        
      </div>
    </form>  
  </body>
</html>


