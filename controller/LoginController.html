<?php 
/*Objetivos: 3. Controlador para manejar la lógica de autenticación (LoginController.php) */
// Importamos las clases necesarias
require_once "../Connection.php";
require_once "../models/User.php";

class LoginController {

    public function authenticate() {
        // Solo actuamos si se envió el formulario por POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // 1. Iniciamos la conexión
            $con = new Connection();
            $db = $con->connect();

            // 2. Creamos el modelo y le pasamos la conexión
            $userModel = new User($db);

            // 3. Capturamos los datos de la vista (Asegúrate que el name en HTML sea 'username' y 'password')
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // 4. Ejecutamos la validación
            if ($userModel->login($username, $password)) {
                session_start();
                $_SESSION['user_id'] = $userModel->getId();
                $_SESSION['rol'] = $userModel->getRol(); // Guardamos el rol en la sesión
                
                // Redirección inteligente basada en el rol
                switch($_SESSION['rol']) {
                    case 'Super Administrador':
                        header("Location: ../views/admin_panel.php");
                        break;
                    case 'Vendedor':
                        header("Location: ../views/pos_ventas.php");
                        break;
                    default:
                        header("Location: ../views/home.php");
                }
                exit();
            } else {
                header("Location: ../views/login.php?error=1");
                exit();
            }
        }
    }
}

// ... (dentro de LoginController.php)

// ESTO es lo que hace que funcione al recibir el POST:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new LoginController();
    $auth->authenticate();
}
?>