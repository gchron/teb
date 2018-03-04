<?php


$liczby = array(1, 3, 5, 6, 8, 10, 11, 14, 17, 19);
$liczba_count = count($liczby);
$parzyste = 0;
$nieparzyste = 0;

$i = 0;

echo "Liczby w tablicy : <br>";
for ($i = 0; $i < $liczba_count; $i++)
	{
		echo $liczby[$i]."<br>";
		if (($liczby[$i] % 2) == 0) 
		{
			$parzyste++;
		} else {

			$nieparzyste++;
		}
	}

echo "<br>";
echo "Ilość liczb w tablicy: ".$liczba_count;
echo "<br>";
echo "Ilość liczb parzystych w tablicy: ".$parzyste;
echo "<br>";
echo "Ilość liczb nieparzystych w tablicy: ".$nieparzyste;



// Bartłomiej Mazurek