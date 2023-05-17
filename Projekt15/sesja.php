
<?php
session_start();
echo isset($_SESSION['licznik']);
$_SESSION['licznik'] = 1;
if (isset($_SESSION['licznik'])) {
    $_SESSION['licznik'] = $_SESSION['licznik'] + 1;
} else {
    $_SESSION['licznik'] = 1;
}
echo $_SESSION['licznik'];
echo "<p> Identyfikator sesji to: " . session_id() . "</p>";
$id = session_id();
?>
	

    <form action="login.php" method="post">
        <input type="hidden" name="IdUser" value="1" >
        <input class="btn btn-warning btn-sm" type="submit" name="remove" value="USUŃ"> </form>