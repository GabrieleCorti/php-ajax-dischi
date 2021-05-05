<?php
require "albums.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <!-- scegliere cosa vedere attraverso commento -->
        <?php /* include __DIR__ . '/component/card.php'; */ ?>
        <div class="card" v-for="(item, index) in albums">
            <h1>{{item.title}}</h1>
            <div class="img_wrap">
                <img :src="item.poster" alt="">
            </div>
            <p><small class="title">{{item.title}}</small></p>
            <p><small>{{item.genre}}</small></p>
            <p><small class="year">{{item.year}}</small></p>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="script.js"></script>

</html>