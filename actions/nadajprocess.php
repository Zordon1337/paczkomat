<?php
$paczka = $_GET['nazwapaczki'];
$mail = $_GET['mail1'];
$adres = $_GET['addr'];
$kododbioru = random_int(000010, 999999); // generowanie kodu do odbioru
$mail12 = "Paczka nadana przez $mail kod odbioru: $kododbioru Nazwa Paczki: $paczka Adres: $adres";

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
require '.\PHPMailer\src\Exception.php';
require '.\PHPMailer\src\PHPMailer.php';
require '.\PHPMailer\src\SMTP.php';
$mail = new PHPMailer(true);                              
try {
    $mail->isSMTP();                                    
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                          
    $mail->Username = 'MAIL';  // Tutaj Dajesz swój mail/nazwe gmail      
    $mail->Password = 'HASLO_APLIKACJI'; // tutaj dajesz wygenerowane hasło                         
    $mail->SMTPSecure = 'tls';                    
    $mail->Port = 587;      

    $mail->setFrom('MAIL@gmail.com', "Sender"); // sender's email and name
    $mail->addAddress('TWOJ_MAIL@gmail.com', "Receiver");  // Tutaj będziesz dostawać maile o nowej paczce (musisz manualnie kody dodawać do bazy danych)

    $mail->Subject = "Paczka Nadana";
    $mail->Body    = "$mail12";

    $mail->send();
    echo "Paczka została nadana, przyjdzie ci kod na adres email jaki podales jak juz bedzie gotowa do odbioru";
    echo "<a href='/''>To już dzisiaj na tyle</a>";
} catch (Exception $e) { // To raczej nie powinno się stać ale zostawiam na wszelki wypadek
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
