<?php
$p = "Voer twee getallen in.";
$deelgetal = 0;
$deler = 0;

if (
    isset($_GET["getal1"]) && $_GET["getal1"] != "" &&
    isset($_GET["getal2"]) && $_GET["getal2"] != ""
) {

    $deelgetal = $_GET["getal1"];
    $deler = $_GET["getal2"];

    if ($deler != 0) {

        if (($deelgetal % $deler) > 0) {
            $p = $deelgetal . " is niet deelbaar door " . $deler;
        } else {
            $p = $deelgetal . " is deelbaar door " . $deler;
        }

    } else {
        $p = "De deler mag geen 0 zijn.";
    }
}
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deelbaarheid Controleren</title>
</head>

<body>
    <h2>Deelbaarheid Controleren</h2>
    <hr>

    <form class="card">
        <label>
            Deelgetal:
            <input type="number" name="getal1">
        </label>

        <label>
            Deler:
            <input type="number" name="getal2">
        </label>

        <button>Controleer</button>

        <p><?= $p ?></p>
    </form>

</body>
</html>