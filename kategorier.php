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
<div class="mx-3 my-3 d-flex">
    <a href="index.php" class="btn">
        <img src="icons/arrow.png" alt="Back" width="24" height="24">
    </a>
    <h1 class="overskrift">Alle kategorier</h1>
</div>
    <br>
<div class="mx-3">
    <div class="row g-2 mb-3">
    <?php
    $sqlKategori = "SELECT * FROM kategorier";
    $kategorier = $db->sql($sqlKategori);
    foreach($kategorier as $kategori) {
        ?>
        <div class="col-6 text-center">
            <a href="index.php?kategoriId=<?php echo $kategori->kateId ?>" class="btn btn-light w-100"><?php echo $kategori->kateNavn ?></a>
        </div>
        <?php
    }
    ?>
    </div>
</div>