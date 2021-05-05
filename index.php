<?php
require "albums.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <?php foreach ($albums as $album) : ?>
            <div>
                <h1><?php echo $album['title'] ?></h1>
                <div class="img_wrap">
                    <img src="<?php htmlspecialchars($album['poster']); ?>" alt="">
                </div>
                <p><small><?php echo $album['author'] ?></small></p>
                <p><small><?php echo $album['genere'] ?></small></p>
                <p><small><?php echo $album['year'] ?></small></p>

            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>