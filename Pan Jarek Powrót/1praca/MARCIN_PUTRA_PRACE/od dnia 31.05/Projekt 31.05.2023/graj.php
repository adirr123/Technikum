<?php 
$gracz1 = $_POST['gracz1'];
$gracz2 = $_POST['gracz2'];
$dziala = array("kamień","papier","nożyce");
if (in_array($gracz1, $dziala)) {
    if (in_array($gracz2, $dziala)) {
    
    
 


if ($gracz1 == $gracz2) {
    echo "remis";
}elseif (
    ($gracz1 == "kamień" && $gracz2 == "nożyce") ||
    ($gracz1 == "papier" && $gracz2 == "kamień") ||
    ($gracz1 == "nożyce" && $gracz2 == "papier")
) {
    echo "wygrał gracz1";
} else {
    echo "wygrał gracz2";
}
}
else {
    echo "zły wpis";
    return 0;
}
} else {
    echo "zły wpis";
    return 0;
}
?>