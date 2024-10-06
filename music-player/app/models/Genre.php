<?php
class Genre {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query('
            SELECT g.id, g.nombre, COUNT(c.id) AS song_count
            FROM genres g
            LEFT JOIN songs c ON g.id = c.genre_id
            GROUP BY g.id
        ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
