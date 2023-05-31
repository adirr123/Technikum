<?php
$wiek= $_POST['wiek'];
$data = 0 + $wiek;

if ($data >= 18) {
    echo "Pełnoletnia";
}
else{
    echo"NiePełnoletni";
}
?> 