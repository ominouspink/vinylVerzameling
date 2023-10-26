<?php
include 'scripts/script.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vinyl verzameling - Sophia Gorgievski</title>
    <link rel="stylesheet" href="styling/style.css">
    <script src="scripts/javascript.js" defer></script>
</head>

<body>
    <center>
        <div class="papaHeader">
            <div class="headDiv1"> <img class="icon" src="media/sops-vinyl.png"></div>
            <div class="headDiv2">
                <ul class="box">
                    <li class="list"><a class="active" href="index.php?login=login">Login</a></li>
                   
                </ul>
            </div>
            <div class="headDiv3"> <a href=#cart><img class="icon" src="media/cart.png"></a></div>
        </div>
    </center>
    <hr>
    <div class=vinyls>
        <a href="index.php?vinyl=nectar"><img src="media/nectar.png" id="nectar">
            <p>nectar</p>
        </a>
        <a href="index.php?vinyl=badIdeas"><img src="media/badIdeas.png">
            <p>bad ideas</p>
        </a>
        <a href="index.php?vinyl=nectar"><img src="media/nectar.png" id="nectar">
            <p>nectar</p>
        </a>
        <a href="index.php?vinyl=badIdeas"><img src="media/badIdeas.png">
            <p>bad ideas</p>
        </a>
        <a href="index.php?vinyl=nectar"><img src="media/nectar.png" id="nectar">
            <p>nectar</p>
        </a>
        <a href="index.php?vinyl=badIdeas"><img src="media/badIdeas.png">
            <p>bad ideas</p>
        </a>
        <a href="index.php?vinyl=nectar"><img src="media/nectar.png" id="nectar">
            <p>nectar</p>
        </a>
        <a href="index.php?vinyl=badIdeas"><img src="media/badIdeas.png">
            <p>bad ideas</p>
        </a>
        <a href="index.php?vinyl=nectar"><img src="media/nectar.png" id="nectar">
            <p>nectar</p>
        </a>
        <a href="index.php?vinyl=badIdeas"><img src="media/badIdeas.png">
            <p>bad ideas</p>
        </a>
        <a href="index.php?vinyl=nectar"><img src="media/nectar.png" id="nectar">
            <p>nectar</p>
        </a>
    </div>

    <div class="inspect">
        <img class="display" id="display" src="media/<?= $vinylInspect ?>.png">
        <div class="infoBox">
            <b class="title" id="title">album: <?= $vinylName ?></b>
            <p class="info" id="info">artist: <?= $artist ?><br>
                info: <?= $artistInfo ?></p>
        </div>
    </div>

</body>

</html>