<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="formularz">
<form action="policz.php" method="post" >
<select name="towar" id="towar" >
    <option value="KOSZULA">Koszula</option>
    <option value="SPODNIE">Spodnie</option>
    <option value="CZAPKA">Czapka</option>
    <option value="SKARPETY">Skarpety</option>
</select>
<select name="ilosc" id="ilosc">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
</br>
<input type="text" value="kasa" id="kasa" placeholder="wprowadź ilość kasy">
<input type="submit" value="policz">
</div>
</form>
</body>
</html>


