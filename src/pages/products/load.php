<?php
  require_once '../../database/connection.php';

  $id = $_GET['id'];

  $sql = "SELECT c.id, c.nome, c.descricao, c.preco, c.foto, t.nome AS tipo_nome 
  FROM carnes c 
  LEFT JOIN tipo t ON c.tipo_id = t.id
  WHERE c.id = $id";
  
  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $nome = $row['nome'];
        $descricao = $row['descricao'];
        $preco = $row['preco'];
        $tipo_nome = $row['tipo_nome'];
        $imagem = $row['foto'];
      }
    }
  }   
;?>