<?php
if (isset($_POST['submit'])) {
    $potrawa = htmlspecialchars($_POST['potrawa']);
    $cena = htmlspecialchars($_POST['cena']);
    //echo $potrawa . ' ' . $cena;

$conn=mysqli_connect('localhost','admin','admin1234','restauracja');

if ( !$conn ) {
    echo 'Błąd połączenia z bazą danych. Error: ' , mysqli_connect_error(); 
} else { 
    $sql = 'SELECT potrawa, cena FROM menu';
    $result = mysqli_query($conn, $sql);
    $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <title>ryszard</title>
</head>
<body>

    <div class="murzyn6"><h1>Usuń z Menu</h1>

<div class="murzyn4"><?php echo htmlspecialchars($elem['potrawa']);?></div><div class="murzyn4"><?php echo htmlspecialchars($elem['cena']);?>zł</div></br>

    <input type="submit" value="dodaj" class="dodaj" name="submit">
</form></div>
<a href="index.php"><button>Powrót</button></a>
<?php echo 'Połączono z bazą danych.'; 



?>

</div>
</body>
</html>

<?php
$inf=false;
    $conn= mysqli_connect('localhost','admin','admin1234','restauracja');

    if( !$conn ) {
        echo 'Błąd połączenia z bazą danych. Error :'.mysqli_connect_error() ;
    } else{

        $sql= 'SELECT ID,potrawa,cena FROM menu';
        $result= mysqli_query($conn, $sql);
        $menu= mysqli_fetch_all($result,MYSQLI_ASSOC);
        //print_r($menu);
        // foreach($menu as $elem){
        //     echo $elem['potrawa'].' '.$elem['cena'].'<br>';
        // }

        if(isset($_POST['submit'])){
            $id=htmlspecialchars($_POST['ID']);
        
            
        $conn= mysqli_connect('localhost','admin','admin1234','restauracja');
    
        if( !$conn ) {
            echo 'Błąd połączenia z bazą danych. Error :'.mysqli_connect_error() ;
        } else{
            $sql = "DELETE FROM menu WHERE ID=$id";
            if(mysqli_query($conn, $sql)) {
                header('Location: usun.php');
                $inf= true;
            }else{
                $inf= false;
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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
 </head>
 <body>
    
    <div class="header">
        <img src="logo.jpg" alt="logo">
    </div>
    <div class="buttons">
        <a href="index.php"><button>STRONA GŁÓWNA</button></a>
        <a href="dodaj.php"><button>DODAJ</button></a>
        <a href="usun.php"><button>USUŃ</button></a>
    </div>
    <div class="menu">
    <h1>MENU</h1>
        <h2><?php
            //echo 'Połączono z bazą danych.';
            //mysqli_close($conn);
        ?></h2>
       <div class="section-menu-items">
        <?php foreach($menu as $elem){ ?>
            <div class="section-menu-item">
            <div class="section-menu-item-id">
                    <?php
                    echo htmlspecialchars($elem['ID']).' '.htmlspecialchars($elem['potrawa']).' '.htmlspecialchars($elem['cena']).' zł';
                    ?>
                </div>
            </div>
            <?php } ?>
       </div>
        <form action="usun.php" method="post"> 
            ID:<input type="number" name="ID" placeholder="ID">
            <input type="submit" name="submit" value="USUŃ Z MENU">
        </form>
    </div>
    <div class="footer">
        Adres restauracji: ul.Pierwsza 10-101 Banino
    </div>

 </body>
 </html>

 <?php
    }
 ?>