<?php

  include "includes/topoinicio.php";

?>
   <?php 
    
    include "includes/menu.php";
    
    ?> 

      <?php
      
        require "includes/autentica.php";    
        
      ?>
    
    <div class="content">
      <h2>Bem-Vindo <?php echo $_SESSION['nome']; ?>!</h2>  
    </div>
</body>  
  </body>
</html>


