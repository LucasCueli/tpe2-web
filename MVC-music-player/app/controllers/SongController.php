<?php
require_once '../app/models/Song.php';
require_once '../app/models/Genre.php';


class SongController {
    public function show($genre_id) {
        //Obtener canciones del genero
        $songs = Song::getByGenre($genre_id);

        // Obtener el nombre del género seleccionado
        $genre = Genre::getById($genre_id);

        //Pasar canciones y nombre del genero a la vista
        require_once '../app/views/songs/show.php';
    }
}
