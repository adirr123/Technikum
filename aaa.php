<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die('Połączenie nieudane'.mysqli_connect_error());
       } else {
       echo 'Połączenie udane';
       mysqli_close($conn)
       
       $sql = "CREATE DATABASE if not exists wedkowanie1";
};
       if ($conn->query($sql) === TRUE) {
        echo "Baza danych oki";
       } else { 
        echo "Błąd przy zakładaniu bazy danych";
        $conn->error;
        }
        $new_tabela = "CREATE TABLE pracownicy (
        id integer,
        imie varchar(30),
        nazwisko varchar(30),
        pesel char(11)
        )";

        if ($conn->query($new_tabela === TRUE) {
            echo "Tabela oki";
        } else {
            echo "Błąd przy tworzeniu tabeli";
            $conn->error;
        }

        $dodawanie_pozycji = "INSERT INTO wedkowanie.pracownicy VALUES (1,
        'Jan','Nowak','02456754554')"

    )";
       mysqli_close{$conn};
       

    ?>
</body>
</html> 