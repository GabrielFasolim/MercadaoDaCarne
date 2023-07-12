<?php
  session_start();
  require_once "../../../database/connection.php";
  header('Content-Type: application/json');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO Tipo (nome, descricao)
            VALUES ('$nome', '$descricao')";

    if ($result = mysqli_query($conn, $sql)) {       
      $status = 'success';
      $message = 'Requisição bem sucedida';
      $statusCode = 200;

      $response = array(
          'status' => $status,
          'message' => $message,
      );
      echo json_encode($response);
      http_response_code($statusCode);
      exit;
    } else {
      $status = 'error';
      $message = 'Erro ao realizar a requisição';
      $statusCode = 500;

      $response = array(
          'status' => $status,
          'message' => $message,
      );
      echo json_encode($response);
      http_response_code($statusCode);
      exit;
    }
  }
  mysqli_close($conn);
?>
