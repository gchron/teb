<?php


/* 
WYPISYWANIE LICZB

function TestFunction($number, $number2) {

	for ($i = 0; $i < $number2; $i++) {
		echo $number;
		echo "<br>";
		$number = $number + 1;
	}

}

TestFunction(60, 29);

*/


// FUNKCJA PORÓWNUJĄCA WARTOŚCI

function CompareNumbers ($number, $number2, $number3) {

	if ($number > $number2 && $number > $number3) {

		echo "Największa liczba to:".$number;
	} elseif ($number2 > $number && $number2 > $number3) {

		echo "Największa liczba to:".$number2;
	} elseif ($number3 > $number && $number3 > $number2) {

		echo "Największa liczba to:".$number3;
	} else {

		echo "Wszystkie liczby są równe!";
	}
}

CompareNumbers(2,1,3);