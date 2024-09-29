<?php
session_start(); // Iniciar la sesión
require_once '../config/database.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

// Enrutador básico
switch($url) {
    case 'genre':
        require_once '../app/controllers/GenreController.php';
        $controller = new GenreController();
        $controller->index();
        break;
        
    case 'song':
        require_once '../app/controllers/SongController.php';
        $controller = new SongController();
        $controller->show($_GET['id']);
        break;
        
    case 'admin/login':
        require_once '../app/controllers/AdminController.php';
        $controller = new AdminController();
        $controller->login();
        break;
        
    case 'admin/dashboard':
        // Proteger la ruta del dashboard
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?url=admin/login');
            exit();
        }
        require_once '../app/controllers/AdminController.php';
        $controller = new AdminController();
        $controller->dashboard();
        break;
        
    case 'admin/logout':
        require_once '../app/controllers/AdminController.php';
        $controller = new AdminController();
        $controller->logout();
        break;
        
    default:
        require_once '../app/controllers/GenreController.php';
        $controller = new GenreController();
        $controller->index();
        break;
}
