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
    <?php
        $error = true;
        if(!isset($_POST['imie'])|| empty($_POST['imie'])){
            $error = false;

        }   
        if(!isset($_POST['tel'])|| empty($_POST['tel'])){
            $error = false;

        }  
        if(!isset($_POST['mail'])|| empty($_POST['mail'])){
            $error = false;

        }  
        if(!isset($_POST['tresc'])|| empty($_POST['tresc'])){
            $error = false;

        }  
        if (!$error) {
            $commit="Uzupełnij cały formularz";
            print $commit;
            print "<meta http-equiv=\"refresh\" content=\"0;url=index.php\">";
            exit();
        }
            
            $name=$_POST['imie'];
            $tel=$_POST['tel'];
            $mail=$_POST['mail'];
            $tresc=$_POST['tresc'];
            /*print $name;
            print $tel;
            print $mail;
            print $tresc;*/

            $wiadomosc = "Wadomość od (nazwa): <strong>";
            $wiadomosc .= name;
            $wiadomosc .= "</strong>\n";
            $wiadomosc .= "Mail nadacy: <strong>";
            $wiadomosc .= $mail;
            $wiadomosc .= "</strong\n";
            $wiadomosc .= "Telefon kontaktowy: <strong>";
            $wiadomosc .= $tel;
            $wiadomosc .= "</strong>\n";
            $wiadomosc .= "Tresc wiadomości: ";
            $wiadomosc .= $tresc;
        
            $charSet = "UTF-8";
            $userName = "adres@gmail.com";
            $mailSubject = "Zgłoszenie ze strony internetowej";
    
            $header = "Content-type: text/html; charset=" . $charSet . " \r\n";
            $header .= "From: " . $name . " <" . $name . "> \r\n";
            $header .= "MIME-Version: 1.0 \r\n";
            $header .= "Content-Transfer-Encoding: 8bit \r\n";
            $header .= "Date: " . date("r (T)") . " \r\n";
            $header .= iconv_mime_encode("Subject", $mailSubject);
            // Send mail
            $success = mail($userName, $mailSubject, $wiadomosc, $header);
    
            if (!$success) {
                $komunikat = "Twoja wiadmość nie została wysłana.";
                print "$komunikat";
            } else {
                $komunikat = "Dziekujemy za wysłaną wiadomość! Odezwiemy się w ciągu 24 godzin.";
                print "$komunikat";
            } 
            <h1 class="maintitle">Mail został wysłany</h1>
</body>
</html>