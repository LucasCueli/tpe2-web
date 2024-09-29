<h1>Canciones del género: <?= $genre['name'] ?></h1> <!-- Mostrar el nombre del género -->
<div class="songs">
    <?php foreach($songs as $song): ?>
        <div class="song">
            <h3><?= $song['title'] ?> - <?= $song['artist'] ?></h3>
            <p>Álbum: <?= $song['album'] ?> (<?= $song['year'] ?>)</p>
            <p>Letra: <?= $song['lyrics'] ?></p>
            <a href="">
                <iframe style="border-radius:12px" src="<?= $song['video_url'] ?>" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </a>
        </div>
    <?php endforeach; ?>
</div>

