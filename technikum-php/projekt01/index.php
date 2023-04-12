<?php
    session_start();
    
    if(isset($_SESSION['licznik'])){
        $_SESSION['licznik']=$_SESSION['licznik']+1;
    }else{
        $_SESSION['licznik']=1;
    }
    
    echo "<p>Identyfikator sesji to:".session_id()."</p>";
    $id=session_id();
    echo $id;
    
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
    
    <div class="res"><a href="index.php"><button> ODŚWIEŻ STRONĘ </button></a></div>
    <div class="licznik"> LICZNIK: <?php
    echo $_SESSION['licznik'];?></div>
    <div class="inne">
    <a href="USUN.php"><button> USUŃ SESJE </button></a>
    <a href="dodaj.php"><button>  KONTAKT  </button></a>
    </div>

</body>
</html>