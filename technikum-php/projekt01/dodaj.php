<?php
    session_start();
    echo "<p>Identyfikator sesji to:".session_id()."</p>";
    echo $_SESSION['licznik'];
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
    
    <div class="strona"><a href="index.php"><button>  STRONA GŁÓWNA  </button></a></div>

</body>
</html>