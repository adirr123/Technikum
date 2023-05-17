<?php
$id = 0;
$inf = false;
$conn = mysqli_connect('localhost','admin','admin1234','restauracja');
if (!$conn){
    echo ' Błąd połączenia z bazą danych. Error :' . mysqli_connect_error();
} else {
    $sql='SELECT id,potrawa,cena FROM menu';
    $result= mysqli_query($conn,$sql);
    $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    if(isset($_POST['submit'])){
        header('location:usun.php');
        $id = $_POST['id'];
}


    $sql="DELETE FROM menu WHERE id=$id";
    mysqli_query($conn,$sql);
    // $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
<form action="usun.php" method="post" >
        
            USUN Z MENU <br>
            <?php
            if ($inf) {
                ?>
                <h1>Usunięto potrawe </h1>
                <?php
            }
            ?>
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
       <input type="number" name="id"> <br>
        <input type="submit" name="submit" value="usuń"> <br>
        <?php

        foreach ($menu as $elem) {
            echo htmlspecialchars($elem['id']);
        ?> <?php
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
<form action="mail.php" method="post">
        <div class="div1">
            <div class="div2">
                <input class="name" type="text"  name="imie" placeholder="Imię, Nazwisko">   <br>
                <input class="telefon" type="tel" name="tel" placeholder="Telefon kontaktowy"><br>
                <input class="email" type="email"  name="mail" placeholder="E-mail">
            </div>
            <div class="div3">
                <textarea id="jo" name="news" class="tresc" rows="" cols="" placeholder="Treść wiadomości"></textarea><br>
                 <input class="submit" type="submit" value="Wyślij wiadomosc">
            </div>
    </div>
    </form>
    
</body>
</html>
<?php
}
?>