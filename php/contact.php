<?php
// Zmienna dla Imienia i nazwiska
$name = $_POST["ImieNazwisko"];

// Zmienna dla telefonu
$phone = $_POST['phone'];

// Zmienna dla adresu email
$email = $_POST['email'];

// Zmienna dla treści wiadomości
$message = $_POST['message'];

// Email z którego ma być wysłana wiadomość
$sourceMail = "kontakt@paczka.info";

// Email na który ma zostać wysłana wiadomość
$destynationMail = "biuro@paczka.info";

// Tytuł wiadomości
$title = "Wiadomość z formularza na stronie paczka.info";

// Treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie Nazwisko / Nazwa firmy: " . $name . "\n";
$wiadomosc .= "Telefon: " . $phone . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Dodanie kodowania UTF-8 do nagłowka wiadomości
$header ="";
$header .= "Od: " . $sourceMail . "\n";
$header .= "Content-Type:text/plain;charset=utf-8";

// Wysłanie wiadomości
$success = mail($destynationMail, $title, $wiadomosc, $header);

// Przekierowywujemy na potwierdzenie
if ($success){
        print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
    }
else{
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
    }

?>