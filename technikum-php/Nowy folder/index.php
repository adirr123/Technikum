<?php
$conn = mysqli_connect('localhost','admin','admin1234','restauracja');

if (!$conn){
    echo ' Błąd połączenia z bazą danych. Error :' . mysqli_connect_error();
} else {

    $sql='SELECT potrawa,cena FROM menu';
    $result= mysqli_query($conn,$sql);
    $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($menu);
    // foreach($menu as $elem){
    //     echo $elem['potrawa']. ' ' . $elem['cena'] . '<br>';
    // }
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restauracja</title>
</head>
<body>
    <div class="header">
<div class="napis">
RESTAURACJA
<?php echo 'Połączono z bazą danych.';
mysqli_close($conn); ?>
<div class="logo">
    <img src="logo.jpg"></img>
    <a>Restauracja u czarnucha</a>
    <div class="menu">
       <a href="index.php"> <input type="button" name="strona" value="Strona główna"></a>
       <a href="dodaj.php"><input type="button" name="dodaj" value="Dodaj"></a>
        <a href="usun.php"><input type="button" name="puste"></a> <br>
        <?php

        foreach ($menu as $elem) {
         
        
            echo htmlspecialchars($elem['potrawa']);
        ?>
        
        <?php
        echo htmlspecialchars($elem['cena']) . 'zł';
        ?>
        <br>
        <?php
        }
        ?>

        <div class="stopka">
            Ulica Pana Jawła II nr:2137
</div>            
</div>
</div>
</div>
</div>
</body>
</html>
<?php
}
?>