<?php
require "settings/init.php";

// Initialize variables
$sqlAdd = "";
$bind = [];

if (isset($_GET['query'])) {
    // Sanitize the input
    $searchQuery = htmlspecialchars($_GET['query']);

    // Add the search condition
    $sqlAdd = " AND nyhedNavn LIKE :searchQuery ";
    $bind[":searchQuery"] = "%" . $searchQuery . "%";
}

// Prepare the SQL query
$sql = "SELECT * FROM nyheder WHERE 1=1 " . $sqlAdd;
$nyheder = $db->sql($sql, $bind);
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
    <h1 class="overskrift">Søge artikler</h1>
</div>
</header>
<br>
<main>
<div class="search-container mx-3 text-center">
    <form action="search.php" method="GET" class="search-form">
        <input type="text" name="query" class="search-input" placeholder="Søge artikler...">
        <button type="submit" class="search-button">Søg</button>
    </form>
</div>
    <div class="results-container mx-3">
        <?php
        if (isset($_GET['query']) && !empty($_GET['query'])) {
            $searchQuery = htmlspecialchars($_GET['query']);

            // SQL for artikler fra databasen med deres navn
            $sql = "SELECT * FROM nyheder WHERE nyhedNavn LIKE :searchQuery";
            $bind[":searchQuery"] = "%" . $searchQuery . "%";
            try {
                // Viser artikler efter søgning
                if (!empty($nyheder)) {
                    foreach ($nyheder as $nyheden) {
                        echo "<div class='article'>";
                        echo "<h1 class='nyhedNavn'>" . htmlspecialchars($nyheden->nyhedNavn) . "</h1>";
                        // Display an image
                        echo "<img src='images/f0ce52bd-fc1a-4f6d-98dc-87ae7eed28a0_1_90_0_0_4422_2948_1920_1280_03e6e617.jpg' alt='Article Image' class='article-image'>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Ingen artikler fundet med ordet '" . htmlspecialchars($searchQuery) . "'.</p>";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                exit();
            }
        }
        ?>
    </div>
</main>
<footer>
    <?php
    include("includes/footer.php"); ?>
</footer>
</body>
</html>