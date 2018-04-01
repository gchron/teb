<?php

session_start();
error_reporting(0);

	
	function Wyswietl($a_x, $a_y, $b_x, $b_y, $r) {

	
		echo "<tr>";
		$wynik = round(sqrt((pow($a_y - $a_x,2) + pow($b_y - $b_x,2))), 2);
		echo "<td>".$wynik."</td>";
		if ($wynik <= $r) {
			
			echo "<td bgcolor=".'#007f00'."><strong><font color=".'white'.">Ok</font></strong></td>";
			echo "<tr>";
		} else {

			echo "<td bgcolor=".'#FF0000'."><strong><font color=".'white'.">Nok</font></strong></td>";
			echo "</tr>";
		}

	}

	function WspOk($a_x, $a_y, $b_x, $b_y, $r, $i) {

		$wspolrzedne_ok[$i] = array();
		$wspolrzedne_nok[$i] = array();
		$range = $r;
		$wynik = round(sqrt((pow($a_y - $a_x,2) + pow($b_y - $b_x,2))), 2);
		$result = $wynik;
		if ($result < $range) {
			array_push($wspolrzedne_ok[$i], "$a_x", "$a_y", "$b_x", "$b_y");
			$_SESSION["wspolrzedne_ok"][$i][0] =  $wspolrzedne_ok[$i][0];
			$_SESSION["wspolrzedne_ok"][$i][1] =  $wspolrzedne_ok[$i][1];
			$_SESSION["wspolrzedne_ok"][$i][2] =  $wspolrzedne_ok[$i][2];
			$_SESSION["wspolrzedne_ok"][$i][3] =  $wspolrzedne_ok[$i][3];
		}
		 elseif ($result > $range) {
			array_push($wspolrzedne_nok[$i], "$a_x", "$a_y", "$b_x", "$b_y");
			$_SESSION["wspolrzedne_nok"][$i][0] =  $wspolrzedne_nok[$i][0];
			$_SESSION["wspolrzedne_nok"][$i][1] =  $wspolrzedne_nok[$i][1];
			$_SESSION["wspolrzedne_nok"][$i][2] =  $wspolrzedne_nok[$i][2];
			$_SESSION["wspolrzedne_nok"][$i][3] =  $wspolrzedne_nok[$i][3];
			
		} 

	}


?>