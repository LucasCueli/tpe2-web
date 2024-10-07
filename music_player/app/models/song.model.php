<?php

require_once './app/models/model.php';

class SongModel extends Model {

    public function getSongs() {
        $query = $this->db->prepare('SELECT * FROM songs WHERE genre_id=? ORDER BY title');
        
        $query->execute();
        $songs = $query->fetchAll(PDO::FETCH_OBJ);
        return $songs;
    }

    public function getSong($id) {
        $query = $this->db->prepare('SELECT * FROM songs WHERE id=?');
        $query->execute([$id]);
    
        $song = $query->fetch(PDO::FETCH_OBJ);
        return $song;
    }

    public function getGenreSongs($genre_id) {
        $query = $this->db->prepare('SELECT * FROM songs WHERE genre_id=? ORDER BY title');
        $query->execute([$genre_id]);

        $songs = $query->fetchAll(PDO::FETCH_OBJ);
        return $songs;
    }

    public function saveSong($cancion, $album, $duracion, $track, $id = null) {
        if (isset($id)) {
            $query = $this->db->prepare('UPDATE songs SET cancion_nombre=?, album=?, duracion=?, track=? WHERE cancion_id=?');
            $query->execute([$cancion, $album, $duracion, $track, $id]);
        } else {
            $query = $this->db->prepare('INSERT INTO songs (cancion_nombre, album, duracion, track) VALUES(?, ?, ?, ?)');
            $query->execute([$cancion, $album, $duracion, $track]);

            return $this->db->lastInsertId();
        }
    }

    public function deleteSong($id) {
        $query = $this->db->prepare('DELETE FROM songs WHERE cancion_id=?');
        $query->execute([$id]);
    }
}