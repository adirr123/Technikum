<?php
    include 'config.php';
    //echo $login;
    //echo $pass;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="form">
        <form action="tajne.php" method="post">
        <div class="login">
        Login:
        <input type="text" name="loginuser">
        </div>
        <div class="pass">
            Haslo:
            <input type="password" name="passuser">
        </div>
        <div class="submit">
            <input type="reset" value="reset">
            <input type="submit" value="login">
        </div>
        </form>
    </div>

</body>
</html>