<h1>Géneros de música</h1>
<div class="genres">
    <?php foreach($genres as $genre): ?>
        <div class="card">
            <h2><?= $genre['name'] ?> (<?= $genre['song_count'] ?> canciones)</h2>
            <a href="index.php?url=song&id=<?= $genre['id'] ?>">Ver canciones</a>
        </div>
    <?php endforeach; ?>
</div>
