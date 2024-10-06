<?php
require_once '../app/models/Song.php';

class SongController {
    public function show($genre_id) {
        $songs = Song::getByGenre($genre_id);
        require '../app/views/songs/show.phtml';
    }

    public function details($id) {
        $song = Song::getById($id);
        require '../app/views/songs/details.phtml';
    }
}
?>
