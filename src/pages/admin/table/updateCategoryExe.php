<?php
    session_start();
    require_once "../../../database/connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $tipoNome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $id = mysqli_real_escape_string($conn, $id);
        $tipoNome = mysqli_real_escape_string($conn, $tipoNome);
        $descricao = mysqli_real_escape_string($conn, $descricao);

        $sql = "UPDATE tipo
                SET nome = '$tipoNome',
                    descricao = '$descricao'
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
            header("location: categoryTable.php");
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
