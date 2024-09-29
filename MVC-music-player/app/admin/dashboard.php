<?php
session_start(); // Iniciar la sesión antes de usar $_SESSION
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Bienvenido al Dashboard de Admin</h1>
    <p>Bienvenido, <?= isset($_SESSION['username']) ? $_SESSION['username'] : 'Invitado'; ?>!</p>

    <a href="index.php?url=admin/logout">Cerrar sesión</a>

    <!-- Aquí puedes añadir opciones de administración -->
</body>
</html>

