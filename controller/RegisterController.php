<?php
/*Objetivos: 4. Controlador para manejar la lógica de autenticación (RegisterController.php) */
require_once "../Connection.php";
require_once "../models/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = new Connection();
    $db = $con->connect();
    $userModel = new User($db);

    $username = $_POST['username'] ?? ''; // Asegúrate que el name en register.php sea 'username'
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $fullname = $_POST['fullname'] ?? '';

    if ($userModel->register($username, $email, $password, $fullname)) {
        header("Location: ../views/login.php?registro=exitoso");
    } else {
        header("Location: ../views/register.php?error=1");
    }
    exit();
}
?>