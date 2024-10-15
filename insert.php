<?php
require "settings/init.php";
if(!empty($_POST["data"])){
    $data = $_POST["data"];

    $sql = "INSERT INTO nyheder (nyhedNavn, nyhedBeskrivelse, nyhedDato) VALUES(:nyhedNavn, :nyhedBeskrivelse, :nyhedDato)";
    $bind = [":nyhedNavn" => $data["nyhedNavn"], ":nyhedBeskrivelse" => $data["nyhedBeskrivelse"], ":nyhedDato" => $data["nyhedDato"]];

    $db->sql($sql, $bind, false);

    echo "Nyeheden er oprettet. <a href='insert.php'>Opret et ny nyhed</a>";
    exit;
}

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
<div class="text-center">
<img class="h-auto w-25" src="images/logo.png" alt="logo">
    <p>Her kan du nemt indsætte nyhederne fra Folketidende</p>
</div>
<div class="container">
    <form action="insert.php" method="post">
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="nyhedNavn" class="form-label">Nyhed navn</label>
                <input type="text" class="form-control" id="nyhedNavn" name="data[nyhedNavn]" placeholder="Nyhed navn" value="">
            </div>
            <div class="col-12">
                <label for="nyhedRubrik" class="form-label">Nyhed rubrik</label>
                <textarea class="form-control" id="nyhedRubrik" name="data[nyhedRubrik]"  placeholder="Nyhed rubrik"></textarea>
            </div>
            <div class="col-12">
                <label for="nyhedBeskrivelse" class="form-label">Nyhed beskrivelse</label>
                <textarea class="form-control" id="nyhedBeskrivelse" name="data[nyhedBeskrivelse]"  placeholder="Nyhed beskrivelse"></textarea>
            </div>
            <div class="col-12 col-md-6">
                <label for="nyhedDato" class="form-label">Nyhed dato</label>
                <input type="date" class="form-control" id="nyhedDato" name="data[nyhedDato]" placeholder="Nyhed dato" value="">
            </div>
            <div class="col-12 col-md-6">
                <label for="nyhedFoto">Nyhed billede</label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="">
            </div>
            <div class="col-12 col-md-4 offset-md-8">
                <button type="submit" class="btn btn-primary w-100">Opret</button>
            </div>
        </div>
    </form>
</div>
</body>