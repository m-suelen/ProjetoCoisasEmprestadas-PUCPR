<?php

    include "includes/conecta.php";

    require "includes/autentica.php";      

    $id = "";
    $item_id = "";    
    $destinatario_id = "";    
    $dtemp = "";
    $dtdev = "";

    //Se foi enviado ID via GET - Se é edição de empréstimos
    if(isset($_GET['id'])) {

        //Obtém valor enviado via GET
        $id = $_GET['id'];

        $sql = "SELECT * FROM emprestimos WHERE id = $id";

        //Envia a consulta para obter dados do empréstimo atual
        $res = mysqli_query($conn, $sql);

        //Armazena os dados obtidos
        $row = mysqli_fetch_assoc($res);

        $id = $row['id'];
        $item = $row['item_id'];        
        $destinatario = $row['destinatario_id'];        
        $dtemp = $row['dtemp'];
        $dtdev = $row['dtdev'];
    }
?>

  <?php

    include "includes/topocadastro.php";

  ?>    
    <div class="content">
      <h2>Cadastro de Empréstimos</h2>
        <form action="recebeemprestimos.php" method="post"> 
          <input type="hidden" name="id" value="<?php echo $id; ?>"/>        
          <label for="item_id">itens:</label><br>
          <select name="item_id">
            <option>Selecione o item</option>
            <?php

              $sql = "SELECT id, nome FROM itens";

              $res = mysqli_query($conn, $sql);

              if($res) {
                WHILE($row = mysqli_fetch_assoc($res)) {

                    echo "<option value='".$row['id']."'>".$row['nome']."</option>";

                }
              }

            ?>
          </select><br><br>
          <label for="destinatario_id">Destinatário:</label><br>
          <select name="destinatario_id">
            <option>Selecione o Destinatário</option>
            <?php

              $sql = "SELECT id, nome FROM usuarios";

              $res = mysqli_query($conn, $sql);

              if($res) {
                WHILE($row = mysqli_fetch_assoc($res)) {

                    echo "<option value='".$row['id']."'>".$row['nome']."</option>";

                }
              }

            ?>
          </select><br><br>

          <label for="dtemp">Data Empréstimo:</label><br>
          <input type="date" name="dtemp" value="<?php echo $dtemp; ?>"/><br><br>
          <label for="dtdev">Data Devolução:</label><br>
          <input type="date" name="dtdev" value="<?php echo $dtdev; ?>"/><br><br>
          <input type="submit" value="Enviar"><br><br>          
        </form>
          <a href="listaemprestimos.php">Cancelar</a> 
    </div>  
  </body>
</html>

