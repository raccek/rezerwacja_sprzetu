<?php
require("conection.php");
// ładujemy plik z połączeniem
connection(); 
// łączymy się z bazą danych za pomocą funkcji, którą stworzyliśmy w pliku connection.php
$zapytanie  = "CREATE TABLE `egzaminy` ( 
	`imie` TEXT  NOT NULL,
	`nazwisko` TEXT NOT NULL,
	`telefon` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
	`email` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
	`egzamin` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
	`zgody` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL)";
// zapisujemy zapytanie do zmiennej
$wykonaj = mysql_query('$zapytanie');
// wykonujemy zapytanie;)
?>