<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dragon Music</title>
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Archivo CSS externo -->
</head>
<body>
    <h1>Dragon Music</h1>

    <h2>Sugerencias:</h2>
    
    <div class="genres-wrapper">
        <div class="genres">
            <?php foreach($genres as $genre): ?>
                <div class="card">
                    <!-- Botón de desplazamiento izquierdo -->
                    <button class="scroll-left">⬅️</button>

                    <!-- Imagen y enlace del género -->
                    <a href="index.php?url=song&id=<?= $genre['id'] ?>" class="genre-link">
                        <img src="assets/images/<?= $genre['image'] ?>" alt="<?= $genre['name'] ?>" class="genre-image">
                        <h2><?= $genre['name'] ?> (<?= $genre['song_count'] ?> canciones)</h2>
                    </a>

                    <!-- Botón de desplazamiento derecho -->
                    <button class="scroll-right">➡️</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="assets/js/script.js"></script> <!-- Archivo JS externo -->
</body>
</html>



