<?php
require_once '../app/models/Genre.php';

class GenreController {
    public function index() {
        $genres = Genre::getAll();
        require_once '../app/views/genres/index.php';
    }
}
