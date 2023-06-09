<?php
session_start();
include('site/header.php');
?>
<?php
if (isset($_SESSION['loginSession'])){

?>
<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <h1>Kursy po zalogowaniu</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col text-center box-margin">
            <h1>Oferta kursów</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md box-margin">

            <div class="card">
                <img src="https://picsum.photos/500/200?random=3" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kurs PHP</h5>
                    <p class="card-text">Kursy PHP.</p>
                    <a href="kurs1.php" class="btn btn-primary">Przejdź do kursu</a>
                </div>
            </div>

        </div>
 

<?php
} else {
?>
<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <h1>Brak dostępu do kursów</h1>
        <p>Musisz się <a href="login.php">zalogować</a> lub <a href="signup.php">zarejestrować</a> do portalu.</p>
    </div>
</div>
<?php 
}
?>
</php include('site/footer.php'); ?>