<?php
	// wstawianie danych do podłaczenia do DB
	require ('conection.php');
	connection();

	// tworzenie krótkich nazw otrzymanych zmiennych z formularza
	$id = $_POST[''];
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$telefon = $_POST['telefon'];
	$email = $_POST['email'];
	$egzamin = $_POST['egzamin'];
	$zgody = $_POST['zgody'];
	$cena = '350,00';
	$fv = 'NIE';
	// $date2 = date('d.m.Y H:i:s');

	// przekazanie odpowiednich zmiennych do DB
	$zapytanie = mysql_query("INSERT INTO `egzaminy` VALUES ('$id', '$imie','$nazwisko','$telefon','$email','$egzamin','$zgody', NOW(), '$cena', '$fv');");
	// wykonianie zapytania dodania danych do DB
	$wykonaj = mysql_query('$zapytanie');


	//******************************************
	// SYSTEM WYSYŁANIA MAILI PRZEZ PHPMAILER
	// *****************************************

	require("phpmailer/class.phpmailer.php");

	// Podłącznie classy PHPMailer
	$mail = new PHPMailer();

	// set mailer to use SMTP
	$mail->IsSMTP();                                      
	$mail->Host = "smtp.prazo.pl";  // specify main and backup server
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "info@prazo.pl";  // SMTP username
	$mail->Password = "6wkaecv."; // SMTP password
	// $mail->SMTPSecure = 'tls';	// Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;	// TCP port to connect to

	// Nazwa i adres od kogo wysyłany jest mail
	$mail->From = 'info@prazo.pl';
	$mail->FromName = "Rezerwacja sprzętu na egzamin - Prazo Event";
	// Dodawanie adresata, nazwa jest opcionana
	$mail->AddAddress($email, $imie.' '.$nazwisko);                 
	$mail->AddReplyTo("info@prazo.pl");

	// ustawienie ilościa znaków zawiaja wiersza, podstawowo 50 znaków
	$mail->WordWrap = 50;                                 
	
	// Dodawanie załącznika
	// $mail->AddAttachment("/var/tmp/file.tar.gz");
	// Opcjionalana nazwa pliku
	// $mail->AddAttachment("/tmp/image.jpg", "new.jpg");    

	// set email format to HTML
	$mail->IsHTML(true);                                  

	// Temat maila do wysyłki do uczestników
	$mail->Subject = "Potwierdzenie rezerwacji laptopa na egzamin";
	
	// dołączanie tresci wiadomości z innego pliku.
	include 'wiadomosc.php';
	// Treść maila do wysyłki dla uczestników w formacie HTML
	$mail->Body = ($wiadomosc);
	// Wysyłka wiad
	// $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

	if(!$mail->Send()) {
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   echo 'Powrót na <a href="index.php"> stronę główną </a>';
		} else {

		// echo "Message has been sent";
		header('Location: wypelnienie.php');
	}

?>