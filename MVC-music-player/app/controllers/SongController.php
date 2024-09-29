<?php
require_once '../app/models/Song.php';

class SongController {
    public function show($genre_id) {
        $songs = Song::getByGenre($genre_id);
        require_once '../app/views/songs/show.php';
    }
}
