<?php
    session_start();

    if (!isset($_SESSION['id']) || $_SESSION['role'] != 'admin') {
        header('Location: /mercadão%20da%20carne/src/pages/admin/login/login.php');
        exit;
    }
?>