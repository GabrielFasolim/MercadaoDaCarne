<?php
  require_once '../../../database/connection.php';

  $sql = "SELECT c.id, c.nome, c.descricao, c.preco, t.nome AS tipo_nome 
  FROM mercadaodacarne.carnes c 
  LEFT JOIN mercadaodacarne.tipo t ON c.tipo_id = t.id";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $nome = $row['nome'];
        $descricao = $row['sobrenome'];
        $tipo_id = $row['cnh'];
        $preco = $row['cep'];
        
      }
    }
  }   
;?>