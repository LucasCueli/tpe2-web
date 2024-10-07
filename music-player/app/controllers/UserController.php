<?php
require_once '../app/models/User.php';

class UserController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Hashear la contraseña antes de almacenarla
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Guardar en la base de datos
            $userModel = new User();
            $userModel->createUser($username, $hashedPassword);

            // Redirigir al login después de registrarse
            header('Location: index.php?url=login');
        } else {
            require '../app/views/register.phtml';
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Verificar las credenciales
            $userModel = new User();
            $user = $userModel->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                // Iniciar sesión si la verificación es correcta
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header('Location: index.php');
            } else {
                $error = "Invalid username or password";
                require '../app/views/login.phtml';
            }
        } else {
            require '../app/views/login.phtml';
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php');
    }
}
