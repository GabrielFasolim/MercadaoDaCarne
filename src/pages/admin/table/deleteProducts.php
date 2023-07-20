<?php
require_once "../../../components/adminAuthorization.php";
require_once '../../../database/connection.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  
  $id = intval($id);
  
  
  $sqlDelete = "DELETE FROM Carnes WHERE id=?";
  

  if ($stmt = mysqli_prepare($conn, $sqlDelete)) {
   
    mysqli_stmt_bind_param($stmt, "i", $id);
    

    if (mysqli_stmt_execute($stmt)) {
      header("Location: ./listProducts.php");
      exit;
    } else {
    
      echo "Erro ao excluir registro: " . mysqli_error($conn);
    }
    
    mysqli_stmt_close($stmt);
  } else {

    echo "Erro ao preparar a declaração: " . mysqli_error($conn);
  }
} else {
  echo "ID inválido ou não fornecido.";
}
?>
