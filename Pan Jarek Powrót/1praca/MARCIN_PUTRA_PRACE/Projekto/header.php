<?php
if (isset($_POST['submit'])) {
    $potrawa = htmlspecialchars($_POST['potrawa']);
    $cena = htmlspecialchars($_POST['cena']);
    //echo $potrawa . ' ' . $cena;

$conn=mysqli_connect('localhost','admin','admin1234','restauracja');

if ( !$conn ) {
    echo 'Błąd połączenia z bazą danych. Error: ' , mysqli_connect_error(); 
} else { 
    //echo 'Połączono z bazą danych.';
    // INSERT INTO `menu`(`ID`, `potrawa`, `cena`) VALUES ('[value-1]','[value-2]','[value-3]')
    $sql = "INSERT INTO menu(potrawa,cena) VALUES ('$potrawa', '$cena')";
    if (mysqli_query($conn, $sql)) {
        $inf = true;
    } else {
        $inf = false;
    }
    
    mysqli_close($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Oddawaj mój rower</title>
</head>
<body>

    <div class="murzyn6"><h1>Dodaj do Menu</h1>
    <div class="murzyn7">Potrawka</br>
    <form action="header.php" method="post">
    
<input type="text" name="potrawa" placeholder="potrawka">
</div>
    <div class="murzyn7">Cennik</br><input type="number" placeholder="cena" name="cena"></div>
    <input type="submit" value="dodaj" class="dodaj" name="submit">
</form></div>
<a href="index.php"><button>Powrót</button></a>
    

</div>
</body>
</html>