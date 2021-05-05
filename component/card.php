
<?php foreach ($albums as $album) : ?>
    <div>
        <h1><?php echo $album['title'] ?></h1>
        <div class="img_wrap">
            <img src="<?php echo htmlspecialchars($album['poster']); ?>" alt="">
        </div>
        <p><small><?php echo $album['author'] ?></small></p>
        <p><small><?php echo $album['genere'] ?></small></p>
        <p><small><?php echo $album['year'] ?></small></p>
    </div>
<?php endforeach; ?>