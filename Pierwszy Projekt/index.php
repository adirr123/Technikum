<?php   
    session_start();
    if(isset($_SESSION['licznik'])) {
        $_SESSION['licznik'] = $_SESSION['licznik'] + 1;
    } else {
            $_SESSION['licznik'] = 1;
    }

    echo "<p>Identyfikator sesji to: " . session_id(). " </p>";
    $id = session_id();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <button type="button">Odśwież stronę</button></br>
    </br>
    <a href="add.php"><button type="button">Usuń sesję</button></a>
    <a href="add.php"><button type="button">Kontakt</button></a>
</body>
</html>