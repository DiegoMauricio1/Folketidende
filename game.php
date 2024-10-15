<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<main>
<div class="mx-3 my-3 d-flex">
    <a href="index.php" class="btn">
        <img src="icons/arrow.png" alt="Back" width="24" height="24">
    </a>
    <h1 class="overskrift">Tidende spil</h1>
</div>
<br>
<div class="text-center">
    <img class="banner" src="images/spil.png" alt="banner">
</div>
<br>
<div class="mx-3 d-flex justify-content-between align-items-center">
    <h2 class="overskrift">Opdage</h2>
    <a href="kategorier.php">
        <p class="text-end m-0">Vis alle</p>
    </a>
</div>
    <div class="mx-3 d-flex">
    <div class="card" style="width: 15rem;">
        <img src="images/trivia.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text"><strong>Dagens trivia</strong></p>
        </div>
    </div>
    <div class="card" style="width: 15rem;">
        <img src="images/wordle.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text"><strong>Folketidende wordle</strong></p>
        </div>
    </div>
    </div>
    <br>
    <div class="mx-3 d-flex justify-content-between align-items-center">
        <h2 class="overskrift">Topspillere</h2>
        <a href="kategorier.php">
            <p class="text-end m-0">Vis alle</p>
        </a>
    </div>
    <br>
    <div class="mx-3 d-flex justify-content-evenly align-items-center">
        <div class="flex">
        <div class="player-circle small silver" style="background-image: url('images/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.jpg');"></div>
            <div class="text"><strong>Mikkel</strong></div>
        </div>
        <div class="flex">
        <div class="player-circle big gold" style="background-image: url('images/stefan-stefancik-QXevDflbl8A-unsplash.jpg');"></div>
        <div class="text"><strong>Hanna</strong></div>
        </div>
        <div class="flex">
        <div class="player-circle smaller bronze" style="background-image: url('images/vicky-hladynets-C8Ta0gwPbQg-unsplash.jpg');"></div>
        <div class="text"><strong>Marcus</strong></div>
        </div>
    </div>
</main>
<footer>
    <?php
    include("includes/footer.php"); ?>
</footer>
<!-- <script src="js/app.js"></script> -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>