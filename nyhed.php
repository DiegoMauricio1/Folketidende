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
<header class="text-center">
    <img src="images/f0ce52bd-fc1a-4f6d-98dc-87ae7eed28a0_1_90_0_0_4422_2948_1920_1280_03e6e617.jpg" alt="" class="nyhedFoto">
</header>
<main class="mx-3">
    <div class="d-flex justify-content-between align-items-center">
    <img src="images/logo.png" width="150" height="auto" alt="logo"">
    <p>03/05/2024 - 09:33 am</p>
    </div>
    <?php
    $sql = "SELECT * FROM nyheder WHERE nyhedId = 7";
    $nyheder = $db->sql($sql, $bind);
    foreach($nyheder as $nyheden) {}
    ?>
    <div class="mx-3">
        <?php
        echo "<h1 class='nyhedOverskrift'>" . $nyheden->nyhedNavn . "</h1>";
        ?>
        <?php
        echo "<h5 class='nyheRubrik'>" .$nyheden->nyhedRubrik. "</h5>";
        ?>
        <?php
        echo "<p class='nyhedTekst'>" .$nyheden->nyhedBeskrivelse. "</p>";
        ?>
    </div>
</main>
<footer>
    <?php
    include("includes/footer.php"); ?>
</footer>
</body>
</html>