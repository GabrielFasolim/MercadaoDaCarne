<?php
    session_start();

    require_once '../../../database/connection.php';
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, email, senha 
    FROM mercadaodacarne.usuario
    WHERE email = '$email'";

    if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
        if ($row['email'] == $email && $row['senha'] ==  $senha) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = 'admin';

            $status = 'success';
            $message = 'Login realizado com sucesso';
            $statusCode = 200;

            http_response_code($statusCode);

            $response = array(
                'status' => $status,
                'message' => $message,
            );
            $jsonResponse = json_encode($response);
            echo $jsonResponse;
            exit;

        } else {
            $status = 'error';
            $message = 'Fallha ao realizar o login';
            $statusCode = 400;

            http_response_code($statusCode);

            $response = array(
                'status' => $status,
                'message' => $message,
            );
            $jsonResponse = json_encode($response);
            echo $jsonResponse;
            exit;
        }
        }
    }else{
            $status = 'error';
            $message = 'Fallha ao realizar o login';
            $statusCode = 400;

            http_response_code($statusCode);

            $response = array(
                'status' => $status,
                'message' => $message,
            );
            $jsonResponse = json_encode($response);
            echo $jsonResponse;
            exit;
    }
    }
    mysqli_close($conn);  
;?>