<?php
class Database {
    public static function connect() {
        $dsn = 'mysql:host=localhost;dbname=music-player;charset=utf8';
        $user = 'root';
        $password = '';
        try {
            $db = new PDO($dsn, $user, $password);
            return $db;
        } catch (PDOException $e) {
            echo 'Error en la conexión: ' . $e->getMessage();
        }
    }
}
