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
    <h1 class="overskrift">Live opdateringer</h1>
</div>
</header>
<br>
<main>
    <div class="text-center">
        <h2 class="live">LIVE</h2>
    </div>
    <br>
    <div class="mx-3">
        <?php
        $sql = "SELECT * FROM nyheder INNER JOIN kategorier ON nyhedKateId = kateId WHERE nyhedId = :nyhedId AND kateId = 14";

        $articles = [
            ['nyhedId' => 1, 'number' => 1],
            ['nyhedId' => 3, 'number' => 3],
        ];

        foreach ($articles as $article) {
            $bind = [":nyhedId" => $article['nyhedId']];
            $nyheder = $db->sql($sql, $bind);
            foreach($nyheder as $nyheden) {
                ?>
                <div class="col-12 col-md-6">
                    <div class="news-card">
                        <div class="card-body">
                            <img src="upload/brand.jpg" alt="brand">
                        </div>
                        <div class="card-header">
                            <?php
                            echo "<h5>" .$nyheden->nyhedNavn. " - " . $article['1'] . "</h5>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="news-card">
                        <div class="card-body">
                            <img src="upload/beaver.jpg" alt="beaver">
                        </div>
                        <div class="card-header">
                            <?php
                            echo "<h5>" .$nyheden->nyhedNavn. " - " . $article['3'] . "</h5>";
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
</main>
<footer>
    <?php
    include("includes/footer.php"); ?>
</footer>
</body>
</html>