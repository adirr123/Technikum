<?php

$conn=mysqli_connect('localhost','admin','admin1234','restauracja');

if ( !$conn ) {
    echo 'Błąd połączenia z bazą danych. Error: ' , mysqli_connect_error(); 
} else { 

    $sql = 'SELECT potrawa, cena FROM menu';
    $result = mysqli_query($conn, $sql);
    $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($menu);
    // foreach($menu as $elem) {
    //     echo $elem['potrawa'] . ' ' . $elem['cena'] . '<br>';
    // }

?>
<!DOCTYPE html>
<html lang="Pl-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ryszard ty draniu</title>
</head>
<body>
<div class="murzyn"><img src="img/dzamal.png" alt="złodziej" width="15%" height="15%">Dżamal Złodziej</div>
<div class="murzyn2"><button class="button">Strona główna</button>
<a href="header.php"><button class="button">Dodaj</button></a>
<a href="footer.php"><button class="button">Usuń</button></a></div>
<div class="murzyn3"><h1>MENU</h1>

<div class="murzyn4">Nazwa Dania</div> <div class="murzyn4">Cena</div></br>
<?php foreach($menu as $elem) { ?>
<div class="murzyn4"><?php echo htmlspecialchars($elem['potrawa']);?></div><div class="murzyn4"><?php echo htmlspecialchars($elem['cena']);?>zł</div></br>
<?php } ?>
</div>

<div class="footer">Adres Restauracji</br> Wadowice ul.jana Pawła 2</div>

<?php echo 'Połączono z bazą danych.'; 
mysqli_close($conn);


?>

</body>
</html>
<?php } ?>