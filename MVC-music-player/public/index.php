<?php
require_once '../config/database.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

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
    default:
        require_once '../app/controllers/GenreController.php';
        $controller = new GenreController();
        $controller->index();
        break;
}
