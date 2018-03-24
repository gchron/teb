<?php


// ĆWICZENIE 1

/*
$czas = getdate();
$dzien = $czas['mday'];
$miesiac = $czas['month'];
$rok = $czas['year'];

if($miesiac == "March") {
	$miesiac_pl = "Marzec";
}

echo "Dzisiaj jest ".$dzien." ".$miesiac_pl." ".$rok." roku!";

*/


// ĆWICZENIE 2

/*
$czas = getdate();
$dzien = $czas['weekday'];

if($dzien == "Saturday") {
	$dzien_pl = "sobota";
}

echo "Dzisiaj jest ".$dzien_pl;

*/


// ĆWICZENIE 3

/*
$data = date('z');

$data_koniec_roku = 365 - $data;

echo "Od początku roku upłynęły ".$data." dni";
echo "<br>";
echo "Do końca roku pozostało ".$data_koniec_roku." dni";
*/

// ĆWICZENIE 4

$unix_year = 31556926;

$czas_form = "1966-09-24";

$czas = strtotime($czas_form);

$czas2 = time();

$czas3 = $czas2 - $czas;

$czas4 = $czas3 / $unix_year;

echo "Użytkownik ma ".round($czas4)." lat!";









?>