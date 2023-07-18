<?php
  require_once "../../../components/adminAuthorization.php";
  require_once "../../../database/connection.php";

 

  $sqlDeleteProdutos = "DELETE FROM Carnes WHERE id = $id"
?>

<?php
  if ($result = mysqli_query($conn, $sqlDeleteProdutos)) {
      header('location: ./listProducts.php?result=success');
    } else {
    header('location: ./listProducts.php?result=error');
  }
  mysqli_close($conn);  
?>

