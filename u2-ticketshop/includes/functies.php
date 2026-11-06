<?php

Function berekenTotaal($aantal, $prijs) {
    $totaal = $aantal * $prijs; 
    if ($aantal >=4) {
        $totaal = $totaal * 0.90;
    }

    return $totaal;
}
function begroeting($naam) {
    return "welkom, " . $naam . "!  Bedankt voor je bestelling bij U2";
}