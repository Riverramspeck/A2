<form method="post">
    Tafel: <input type="number" name="tafel"><br><br>

    Beginwaarde: <input type="number" name="begin"><br><br>

    Eindwaarde: <input type="number" name="eind"><br><br>

    <input type="submit" value="Toon tafel">
</form>

<?php
if (isset($_POST['tafel'])) {
    $tafel = $_POST['tafel'];
    $begin = $_POST['begin'];
    $eind = $_POST['eind'];
}

if ($begin > $eind) {
    echo"De begin waarde mag niet groter zijn dan de eindwaarde.";
}
else {

    for ($i = $begin; $i <= $eind; $i++) {
        echo $i . " x " . $tafel . " = " . ($i * $tafel) . "<br>";
    }

}
?>