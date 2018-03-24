


<?php 


// ĆWICZENIE 2 -CHOINKA
/*
$wysokosc = 13;

for ($i = 1; $i <= $wysokosc; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo "*";
	}
	echo "<br/>";

*/


// ĆWICZENIE 3 - POTĘGI
/*
$liczba_wierszy = 10;
$liczba_kolumn = 10;

for ($i = 1; $i <= $liczba_kolumn; $i++) {
	echo "<th>$i</th>";

	}

?>
</tr>

<?php 

for ($i = 1; $i <= $liczba_wierszy; $i++) 
	{
	echo "<tr>";
	echo "<th>$i</th>";
	for ($j = 1; $j <= $liczba_kolumn; $j++)
	{
		echo "<td>";
		echo $j * $i;
		echo "</td>";
	}
	echo "</tr>";
}

?>
</table>

*/


// ĆWICZENIE 4 - TABLICZKA MNOŻENIA
/*

$podstawa = 10;
$wykladnik = 5;

for ($i = 0; $i <= $wykladnik; $i++)
	{
		echo "<th>a<sup>$i</sup></th>\n";

	}
?>
</tr>

<?php 

for ($i = 2; $i <= $podstawa; $i++)
	{

		echo "<tr>\n";
		echo "<th>$i</th>\n";
		for ($j = 0; $j <= $wykladnik; $j++)
			{
				echo "<td>";
				echo pow($i, $j);
				echo "</td>\n";
			}

	}

?>
</table>

*/

// ĆWICZENIE 5 - TELETUBISIE
/*

$n = 'TELETUBISIE';
$dl = strlen($n);

	for ($i = 0; $i < $dl; $i++)
	{

		echo "<td>{$n[$i]}</td>";
	}

?>
</tr>
</table>

*/


// ĆWICZENIA 6 - ABRAKADABRA
/*
$n = "ABRAKADABRA";
$dl = strlen($n);

for ($i = 0; $i < $dl; $i++)
	{

		if ($i % 2) 
			{
				echo '<tr bgcolor="#00000">';
			} else {
				echo "<tr>";
			}
		echo "<td>{$n[$i]}</td></tr>";
	}

?>
</table>

*/


// ĆWICZENIE 7 - OGONKI

/*

$ogonki = "ąćęłńóśźżĄĆĘŁŃÓŚŹŻ";
$ogonki=w1250_to_utf8($ogonki);
$liczbaliter = strlen($ogonki);

for ($i = 0; $i < $liczbaliter; $i++)
	{
		echo "<tr>\n";
		echo "<td>{$ogonki[$i]}</td>";
		echo '<td>' . ord($ogonki[$i]) . '</td>';
		echo '<td>' . bin2hex($ogonki[$i]) . '</td>';
		echo "</tr>\n";

	}
	?>
</table>

*/




// ĆWICZENIE 8 - POLSKIE ZNAKI ISO-8859-2 ORAZ WINDOWS-1250

/*

$polskie_win = "\xb9\xe6\xea\xb3\xf1\xf3\x9c\x9f\xbf\xa5\xc6\xca\xa3\xd1\xd3\x8c\x8f\xaf";

$polskie_iso = "\xb1\xe6\xea\xb3\xf1\xf3\xb6\xbc\xbf\xa1\xc6\xca\xa3\xd1\xd3\x8c\x8f\xaf";


$liczbaliter = strlen($polskie_win);

for ($i = 0; $i < $liczbaliter; $i ++)
{
	$kodwin = ord($polskie_win[$i]);
	$kodiso = ord($polskie_iso[$i]);
	$kodwinHex = bin2hex($polskie_win[$i]);
	$kodisoHex = bin2hex($polskie_iso[$i]);

	

	echo "<td>{$polskie_iso[$i]}</td>";
	echo "<td>$kodwin</td>";
	echo "<td>$kodwinHex</td>";
	echo "<td>$kodiso</td>";
	echo "<td>$kodisoHex</td>";
	echo "</tr>\n\n";

}

*/


//ĆWICZENIE 9 - GDZIE JEST KRZYŻ


/*
$w = 15;
$k = 11;

for ($i = 1; $i <= $w; $i++) {
	echo '<tr>';
	for ($j = 1; $j <= $k; $j++){
		if (
			((floor($w/2) + 1) == $i) || 
			((floor($k/2) + 1) == $j)
			) {
				echo '<td>a</td>';
			} else {
				echo '<td></td>';
			}
	}
	echo '</tr>';
	echo "\n";
}

?>

*/


// ĆWICZENIE 10 - RÓWNOLEGŁOBOK

/*

$wys = 16;
$szer = 60;

for ($i = 1; $i <= $wys; $i++)
{
	for ($j = 1; $j <= $wys - $i; $j++)
	{
		echo ' ';
	} 
	for ($j = 1; $j <= $szer; $j++)
	{
		echo '*';
	}
	echo "\n";

}
?>


*/


//ĆWICZENIE 11 - TRÓJKĄT

/*

$wys = 16;

for ($i = 1; $i <= $wys; $i++) 
	{
		for ($j = 1; $j <= $wys - $i; $j++)
		{
			echo ' ';
		}
		for ($j = 1; $j <= 2 * $i - 1; $j++)
		{
			echo '*';
		}
		echo "\n";
	}


?>

*/


