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
<header class="profile-container">
    <div class="mx-3 my-3 d-flex justify-content-between align-items-center">
    <h4 class="profil">Profil</h4>
    <h5 class="rediger">Rediger</h5>
    </div>
    <div class="text-center">
        <div class="profile-picture">
            <img src="images/Max.jpg" alt="Profile Picture">
        </div>
        <div class="profil-info">
            <h3><strong>Max Schrøder</strong></h3>
            <h5>Lolland Komunne</h5>
            <p>Status: <strong>Medlem-plus</strong></p>
        </div>
    </div>
</header>
<br>
<main>
    <div class="mx-3">
        <h3 class="overskrift">Kategorier præferencer</h3>
        <div>
            <div class="row g-2 mb-3">
                <?php
                $sqlKategori = "SELECT * FROM kategorier WHERE kateId IN (2, 6, 11)";
                $kategorier = $db->sql($sqlKategori);
                foreach($kategorier as $kategori) {
                    ?>
                    <div class="col-3 text-start">
                        <a href="index.php?kategoriId=<?php echo $kategori->kateId ?>" class="btn btn-light w-100"><?php echo $kategori->kateNavn ?></a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <br>
    <div class="mx-3">
            <h3 class="overskrift">Multimedie</h3>
            <div class="row g-2 mb-3">
                <div class="col-3 text-start">
                    <div class="btn btn-light w-100">Videoer</div>
                </div>
            </div>
        <video src="videos/4835063-uhd_2160_3840_30fps.mp4" controls width="320" height="240"></video>
    </div>
    <br>
    <div class="mx-3">
        <h3 class="overskrift">Eventkalender</h3>
        <div class="eventkalender">
            <div class="events">
                <div class="event"></div>
                <div class="button btn">Tilmeld dig</div>
            </div>
            <div class="events">
                <div class="event"></div>
                <div class="button btn">Bestil billet</div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php
    include("includes/footer.php"); ?>
</footer>
</body>