<?php
require_once '../config/database.php';

class Genre {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query('
            SELECT g.id, g.name, COUNT(s.id) AS song_count
            FROM genres g
            LEFT JOIN songs s ON g.id = s.genre_id
            GROUP BY g.id
        ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Nuevo método para obtener el género por ID
    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT id, name FROM genres WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC); // Devuelve solo un género
    }
}

