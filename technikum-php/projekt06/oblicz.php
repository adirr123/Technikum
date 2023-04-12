<?php

$a = $_POST['a'];
$b = $_POST['b'];

for($i = $a; $i<=$b; $i++) {
    for($j=1;$j<=100;$j++) {
        echo $i . '*' . $j . '=' . $i * $j;
        echo '<br>';
    }
}