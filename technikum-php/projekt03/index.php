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
    <h1 class="maintittle">FORMULARZ KONTAKTOWY</h1>
    <div class="wrapper">
    <form action="mail.php" method="post">
        <div class="left">
            <input type="text" name="imie" id="imie" placeholder="IMIE, NAZWISKO"><br>
            <input type="tel" name="tel" id="tel" placeholder="TELEFON KONTAKTOWY"><br>
            <input type="email" name="mail" id="mail" placeholder="E-MAIL">
        </div> 
        <div class="right">
            <input type="textarea" name="tresc" id="tresc" placeholder="TREŚĆ WIADOMOŚCI"><br>
            <input type="submit" value="WYŚLIJ WIADOMOŚĆ" id="baton">
        </div>
    </form>
    </div>
</body>
</html>