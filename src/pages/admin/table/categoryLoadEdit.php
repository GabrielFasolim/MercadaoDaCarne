<?php 
  require_once '../../../database/connection.php';

  $id = $_GET['id'];
  
  $sql = "SELECT id, nome, descricao FROM tipo WHERE id = $id";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $tipoNome = $row['nome'];
        $descricao = $row['descricao'];
      }
    }
  }   
;?>
