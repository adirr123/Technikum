<!-- Napisz funkcję która pobiera ciąg znaków 
(liter i cyfr) i zwraca obliczoną ilość liter i cyfr 
w nim zawartych zwrócić wynik ma jako tablicę znaków 
oraz tablicę cyfr -->
<?php
$text = "Hell5oWor34d";
$text = array_count_values(str_split(str_replace(" ", "", $text)));
$wynikLiter = [];
$wynikCyfr = [];

$i = 0;
$j = 0;
foreach ($text as $litera => $znak) {
    if (gettype($litera) == "string") {
        echo $litera;
        $wynikCyfr[$j] = $litera;
        $j++;
    }
}
echo "<br />";
print_r($wynikLiter);
echo " = ". $znaki;
echo "<br />";
print_r($wynikCyfr)
echo "<br />";








// preg_match_all('/([a-zA-Z])/', $text, $wynikLiter);
// $tmp = echo_array_count_values(str_split(str_replace(" ", "", $wynikLiter)));
// print_r($wynikLiter);
// echo "<br />";
// preg_match_all('/([0-9])/', $text, $wynikCyfr);
// print_r($wynikCyfr);
// echo $wynikLiter[0][0];





?>