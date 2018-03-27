<?php


// ĆWICZENIA - OPERACJE NA PLIKACH

// ĆWICZENIE 1


/*$plik_zapis = fopen("tekst.txt", "a") or die ("Nie można otworzyć pliku!");
$text = "Przykładowe zdanie\n";

if (isset($plik_zapis)) {

	fwrite($plik_zapis, $text);

	fclose($plik_zapis);
} else {

	echo "Nic nie zostało zapisane!";
}*/


// ĆWICZENIE 2

$plik = "tekst.txt";

echo "Ostatnie zdanie w pliku <strong>".$plik."</strong> to: <br><br>";

echo end(file("$plik"));


?>