<?php
class Database {
    private static $host = 'localhost';
    private static $db_name = 'music_player';
    private static $username = 'root';  // Cambia según tu configuración
    private static $password = '';
    private static $conn;

    public static function connect() {
        if (self::$conn == null) {
            self::$conn = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db_name, self::$username, self::$password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
}
?>
