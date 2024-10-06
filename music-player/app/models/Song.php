<?php
class Song {
    public static function getByGenre($genre_id) {
        $db = Database::connect();
        $stmt = $db->prepare('
            SELECT c.*, g.nombre as genre_name
            FROM songs c
            JOIN genres g ON c.genre_id = g.id
            WHERE g.id = ?
        ');
        $stmt->execute([$genre_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare('
            SELECT c.*, g.nombre as genre_name
            FROM songs c
            JOIN genres g ON c.genre_id = g.id
            WHERE c.id = ?
        ');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
