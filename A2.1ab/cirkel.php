<!DOCTYPE html>
<html lang="en">
<body>
    <form method="get">
        diameter:
        <input type="number" name="diameter" step="0.1">
        <button type="submit"> Bereken</button>
</form>

<?php

if (isset($_GET["diameter"])) {
 
    $diameter = $diameter= $_GET["diameter"];

    $straal = $straal =$diameter / 2;
    $straal = pi() *$diameter;
    $oppervlakte = pi() *$straal * $straal;
    $omtrek= pi() *$diameter;

    echo "diameter: " . $diameter . "<br>";
    echo "straal: " . $straal . "<br>";
    echo "omtrek: " . $omtrek . "<br>";
    echo "oppervlakte: " . $oppervlakte;
}

 ?>

</body>
</html>
