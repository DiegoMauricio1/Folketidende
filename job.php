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
<header>
    <div class="mx-3 my-3 d-flex">
        <a href="index.php" class="btn">
            <img src="icons/arrow.png" alt="Back" width="24" height="24">
        </a>
        <h1 class="overskrift">Ledige jobs på Lolland-Falster</h1>
    </div>
</header>
<br>
<main>
    <div class="text-center">
        <h2 class="job">Søg efter et job</h2>
    </div>
    <div class="mx-3">
        <div>
            <form action="job.php" method="GET" class="search-form">
                <input type="text" name="query" class="search-input" placeholder="Stillingsbetegnelse">
                <div class="d-flex">
                <input type="text" name="query" class="search-input" placeholder="Område" style="width: 70%;">
                    <select name="afstand" class="search-input" style="width: 30%;">
                        <option value="0">(+ km)</option>
                        <option value="1">+ 10 km</option>
                        <option value="5">+ 25 km</option>
                        <option value="10">+ 50 km</option>
                        <option value="20">+ 100 km</option>
                    </select>
                </div>
                <select name="arbejdstid" id="arbejdstid-dropdown" class="search-dropdown" style="width: 40%;">
                    <option value="0">Arbejdstid</option>
                    <option value="1">Fuldtid</option>
                    <option value="2">Deltid</option>
                    <option value="3">Elevplads</option>
                    <option value="4">Praktikplads</option>
                    <option value="5">Tidsbegrænset</option>
                </select>
            </form>
        </div>
        <br>
            <div class="text-center">
            <button type="submit" class="search-button">Ny søgning</button>
            </div>
    </div>
    <br>
    <div class="mx-3">
    <div class="card" style="width: 16rem;">
        <img src="images/kibyYQJWbOND7t7Gs3u8XkuIDtznAWEZjHLpdzqc.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-text">Energisk serviceleder</h4>
            <p>Ansøgningfirst: 2024-06-14</p>
            <p>Stenoskolen</p>
            <div class="button btn">Se job</div>
        </div>
    </div>
        <br>
        <div class="card" style="width: 16rem;">
            <img src="images/I2yH1oeSKLwq6zBoDT0hK8rsDaIYaO7SRecIqkuE.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-text">Medierådgiver til Folketidende Gruppen</h4>
                <p>Ansøgningfirst: 2024-04-30</p>
                <p>Folketidende Gruppen</p>
                <div class="button btn">Se job</div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php
    include("includes/footer.php"); ?>
</footer>
</body>
</html>
