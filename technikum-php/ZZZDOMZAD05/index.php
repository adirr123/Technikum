<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $a = rand(1, 10); ?>
    <?php $b = rand(1, 10); ?>
    <form action="oblicz.php" method="post">
<?php echo $a . "*" . $b . "= "; ?>
<input type="number" name="result">
<input type="hidden" name="a" value="<?php echo $rand(1, 15);?>">
<input type="hidden" name="b" value="<?php echo $rand(1, 15);?>">
<input type="submit" value="oblicz">
    
</form>
</body>
</html>