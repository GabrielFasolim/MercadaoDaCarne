<?php
  session_start();
  require_once "../../../database/connection.php";
  header('Content-Type: application/json');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; 
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
      $foto = $_FILES["foto"]["tmp_name"];
      $foto_base64 = base64_encode(file_get_contents($foto));

      $sql = "UPDATE Tipo
              SET nome = '$tipoNome',
                  descricao = '$descricao',
                  tipo_id = '$categoria'
              WHERE id = '$id'";

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
  }
  mysqli_close($conn);
?>
