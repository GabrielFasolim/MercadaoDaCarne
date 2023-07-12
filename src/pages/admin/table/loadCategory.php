<?php 
  require_once '../../../database/connection.php';
  
  $sql = "SELECT id, nome FROM tipo";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $tipoId = $row['id'];
        $tipoNome = $row['nome'];
        
        echo "<option value=\"$tipoId\">$tipoNome</option>";
      }
    }
  }   
;?>
