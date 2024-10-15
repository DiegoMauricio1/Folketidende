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
<header class="mx-3 my-3">
    <a href="index.php">
    <img class="logo" src="images/logo.png" alt="logo">
    </a>
    <!-- <div class="dark-mode-toggle">
        <button id="dark-mode-button">Dark Mode</button>
    </div> -->
</header>
<br>
<br>
<main>
<div class="mx-3">
    <h2 class="overskrift">Seneste nyt</h2>
    <div class="storier">
        <div class="story">
            <div class="circle"></div>
            <div class="text">Sport</div>
        </div>
        <div class="story">
            <div class="circle"></div>
            <div class="text">112</div>
        </div>
        <div class="story">
            <div class="circle"></div>
            <div class="text">Motor</div>
        </div>
        <div class="story">
            <div class="circle"></div>
            <div class="text">Kultur</div>
        </div>
        <div class="story">
            <div class="circle"></div>
            <div class="text">Krimi</div>
        </div>
        <div class="story">
            <div class="circle"></div>
            <div class="text">Lolland</div>
        </div>
    </div>
</div>
<br>
<br>
<div class="mx-3">
    <h2 class="overskrift">Mest læste</h2>
    <div class="mostRead">
        <div class="mest">
            <div class="rectangle"></div>
        </div>
        <div class="mest">
            <div class="rectangle"></div>
        </div>
    </div>
</div>
<br>
<br>
<div class="mx-3 d-flex justify-content-between align-items-center">
    <h2 class="overskrift">Kategorier</h2>
    <a href="kategorier.php">
    <p class="text-end m-0">Vis alt</p>
    </a>
</div>
<div class="mx-3">
    <div class="row g-2 mb-3">
        <div class="col-3 text-start">
            <a href="index.php" class="btn btn-light w-100">Alle</a>
        </div>
        <?php
        $sqlKategori = "SELECT * FROM kategorier WHERE kateId IN (1, 2, 3, 4, 5, 6, 7)";
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
<div class="mx-3 row g-2">
    <?php
    $sqlAdd = "";
    $bind = [];

    if(!empty($_GET["kategoriId"])) {
        $sqlAdd = " AND kateId = :kateId ";
        $bind[":kateId"] = $_GET["kategoriId"];
    }

    $sql = "SELECT * FROM nyheder INNER JOIN kategorier ON nyhedKateId = kateId WHERE kateId >= 1 AND kateId <= 13 ".$sqlAdd;
    $nyheder = $db->sql($sql, $bind);
    foreach($nyheder as $nyheden) {
        ?>
        <div class="col-12 col-md-6">
            <div class="news-card">
                <div class="card-body">
                    <img src="upload/tog.jpg" alt="tog">
                </div>
                <div class="card-head">
                    <?php
                    echo "<h6>" .$nyheden->nyhedNavn. "</h6>";
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
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
