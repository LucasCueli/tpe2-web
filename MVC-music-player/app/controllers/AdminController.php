<?php
require_once '../app/models/User.php';

class AdminController {
    // Mostrar formulario de login
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Verificar si el usuario existe
            $user = User::getByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                // Crear sesión de usuario
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirigir al dashboard
                header('Location: index.php?url=admin/dashboard');
                exit();
            } else {
                // Error de login
                $error = 'Usuario o contraseña incorrectos';
                require '../app/views/admin/login.php';
            }
        } else {
            require '../app/views/admin/login.php';
        }
    }

    // Mostrar dashboard (solo si está logueado)
    public function dashboard() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?url=admin/login');
            exit();
        }

        require '../app/views/admin/dashboard.php';
    }

    // Logout
    public function logout() {
        session_destroy();
        header('Location: index.php?url=admin/login');
        exit();
    }
}
