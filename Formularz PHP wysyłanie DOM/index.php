<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="napis">FORMULARZ KONTAKTOWY</div>
    <form action="mail.php" method="post">
    <div class="wrapper">
        <?php
        if (isset($_GET['commit'])) {
        $tmp = $_GET['ccommit'];
        if (tmp != "") echo $tmp;
        }
        ?>
        <div class="lewo">
            <input type="text" name="imie" id="imie" placeholder="IMIE, NAZWISKO"><br>
            <input type="tel" name="tel" id="tel" placeholder="TELEFON KONTAKTOWY"><br>
            <input type="email" name="mail" id="mail" placeholder="E-MAIL">
        </div> 
        <div class="prawo">
            <input type="textarea" name="tresc" id="tresc" placeholder="TREŚĆ WIADOMOŚCI"><br>
            <input type="submit" value="WYŚLIJ WIADOMOŚĆ" id="baton">
        </div>
    </div>
</form>
</body>
</html>