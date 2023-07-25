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

    if (mysqli_query($conn, $sql)) {
        $status = 'success';
        $message = 'Categoria atualizada com sucesso';
        $statusCode = 200;
    } else {
        $status = 'error';
        $message = 'Erro ao atualizar a categoria';
        $statusCode = 500;
    }

    $response = array(
        'status' => $status,
        'message' => $message,
    );

    http_response_code($statusCode);
    echo json_encode($response);

    exit;
} else {
    header("Location: categoryTable.php");
    exit; 
}

mysqli_close($conn);
?>
