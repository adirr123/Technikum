<?php
$towar=$_POST['towar'];
$ilosc=$_POST['ilosc'];
define("KOSZULA", 45.00);
define("SPODNIE",80.00);
define("CZAPKA", 23.00);
define("P_VAT", 0.23);
define("SKARPETY", 12.00);


// if ($towar=="spodnie") $kwota=$ilosc * $SPODNIE; 
// if ($towar=="koszula") $kwota=$ilosc * $KOSZULA;
// if ($towar=="czapka") $kwota=$ilosc * $CZAPKA;

switch ($towar) {
    case "KOSZULA";
    $kwota = $ilosc * KOSZULA;
    break;
    case "SPODNIE";
    $kwota = $ilosc * SPODNIE;
    break;
    case "CZAPKA";
    $kwota = $ilosc * CZAPKA;
    break;
    case "SKARPETY";
    $kwota = $ilosc * SKARPETY;
    break;
}
$netto = $kwota / (1 + P_VAT);
$vat = $kwota - $netto;
$aaa = $kasa % ($towar * $ilosc)
echo "Twoje zamówienie to: $towar, na kwotę netto: ". round($netto,2)." zł, VAT:". round($vat,2) . "zł, kwota brutto: ".  round($kwota,2)." zł, Reszta: ". round($aaa,2)."";
?>