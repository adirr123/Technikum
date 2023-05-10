<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>licz3</title>
</head>
<body>

</br>
<?php
function zmien2($dni, $godz) {
    $sekdni = 24 * 60 * 60;
    $sekgodz = 60 * 60;
    $allsek = ($dni * $sekdni) + ($godz * $sekgodz);
    echo "$allsek";
    return $allsek; 
}
zmien2(1, 2)
?>
</br>
<script>
    function zmien(d, g) {
        const godzina = 3600;
        const dzien = 86400;
        const ta = g * godzina;
        const tb = d * dzien;
        const allsec = (ta + tb);
        console.log(allsec);
        return allsec;        
    }
    console.log(zmien(1, 5));
</script>   
</body>
</html>

