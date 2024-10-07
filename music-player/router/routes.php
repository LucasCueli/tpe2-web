<?php
require_once '../config/database.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

switch($url) {
    case 'genres':
        require_once '../app/controllers/GenreController.php';
        $controller = new GenreController();
        $controller->index();
        break;
    case 'songs':
        require_once '../app/controllers/SongController.php';
        $controller = new SongController();
        $controller->index();
        break;
    case 'login':
        require_once '../app/controllers/UserController.php';
        $controller = new UserController();
        $controller->login();
        break;
    case 'register':
        require_once '../app/controllers/UserController.php';
        $controller = new UserController();
        $controller->register();
        break;
    case 'logout':
        require_once '../app/controllers/UserController.php';
        $controller = new UserController();
        $controller->logout();
        break;
    default:
        require_once '../app/controllers/GenreController.php';
        $controller = new GenreController();
        $controller->index();
        break;
}
