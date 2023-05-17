<?php
$inf = false;
if(isset($_POST['submit'])){
$potrawa = $_POST['text'];
$cena = $_POST['number'];
// echo $potrawa;
// echo $cena;
$conn = mysqli_connect('localhost','admin','admin1234','restauracja');

if (!$conn){
    echo ' Błąd połączenia z bazą danych. Error :' . mysqli_connect_error();
} else {
    //echo 'Połączono z bazą danych';
    //INSERT INTO `menu`(`id`, `potrawa`, `cena`) VALUES ('[value-1]','[value-2]','[value-3]')
    $sql = "INSERT INTO menu(id, potrawa , cena) VALUES('$id','$potrawa' , '$cena') ";
    if(mysqli_query($conn,$sql)) {
        $inf = true;
    } else {
        $inf = false;
    }
    mysqli_close($conn);

}
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dodaj</title>
</head>
<body>
    <form action="dodaj.php" method="post" >
        <div class="teksty">
            DODAJ DO MENU <br>
            <?php
            if ($inf) {
                ?>
                <h1>Dodano nową potrawę; <?php echo $potrawa; ?>. Cena <?php echo $cena; ?> zł.</h1>
                <?php
            }
            ?>
            
<input type="text" class="potrawa" placeholder="Potrawa" name="text">
<input type="number" class="id" placeholder="ID" name="id"> <br>
<input type="number" class="cena" placeholder="Cena" name="number"> <br>
<input type="submit" class="submit" name="submit">
</div>
</form>
</body>
</html>