<?php
require_once '../app/controllers/GenreController.php';
require_once '../app/controllers/SongController.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

switch($url) {
    case 'genre':
        $controller = new GenreController();
        $controller->index();
        break;
    case 'song':
        $controller = new SongController();
        $controller->show($_GET['id']);
        break;
    case 'details':
        $controller = new SongController();
        $controller->details($_GET['id']);
        break;
    default:
        $controller = new GenreController();
        $controller->index();
        break;
}
?>
