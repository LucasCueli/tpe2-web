<?php
require_once '../config/database.php';

class Song {
    public static function getByGenre($genre_id) {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM songs WHERE genre_id = :genre_id');
        $stmt->execute(['genre_id' => $genre_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
