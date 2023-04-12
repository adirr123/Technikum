
<?php 
// Zabawa z sesjami, i ich działaniem
session_start();
echo isset($_SESSION['licznik']);
$_SESSION['licznik'] = 1;

// if(isset($_SESSION['licznik'])) {
//     $_SESSION['licznik'] = $_SESSION['licznik'] + 1;

// } else {
//     $_SESSION['licznik'] = 1;
// }
echo $_SESSION['licznik'];
echo "<p> identyfikator sesji to: " .session_id()."</p>";
$id=session_id();
?>