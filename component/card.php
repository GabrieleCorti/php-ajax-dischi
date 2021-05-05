<?php foreach ($albums as $album) : ?>
    <div class="card">
        <h1><?php echo $album['title'] ?></h1>
        <div class="img_wrap">
            <img src="<?php echo htmlspecialchars($album['poster']); ?>" alt="">
        </div>
        <p><small class="title"><?php echo $album['author'] ?></small></p>
        <p><small><?php echo $album['genre'] ?></small></p>
        <p><small class="year"><?php echo $album['year'] ?></small></p>
    </div>
<?php endforeach; ?>