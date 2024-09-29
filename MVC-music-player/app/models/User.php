<?php
require_once '../config/database.php';

class User {
    // Obtener un usuario por su nombre de usuario
    public static function getByUsername($username) {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
