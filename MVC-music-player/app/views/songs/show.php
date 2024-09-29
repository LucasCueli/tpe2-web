<h1>Canciones del género</h1>
<div class="songs">
    <?php foreach($songs as $song): ?>
        <div class="song">
            <h3><?= $song['title'] ?> - <?= $song['artist'] ?></h3>
            <p>Álbum: <?= $song['album'] ?> (<?= $song['year'] ?>)</p>
            <p>Letra: <?= $song['lyrics'] ?></p>
            <a href="<?= $song['video_url'] ?>">Ver video</a>
        </div>
    <?php endforeach; ?>
</div>
