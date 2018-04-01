<?php

if (!$_POST["punkt_a"] && !$_POST["punkt_b"] && !$_POST["promien"] ) {


?>

 <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Obliczanie odległości punktów w oparciu o współrzędne x, y</h1>
          <p class="lead">Umieść pliki zawierające współrzędne dla punktu A (punkty_a.txt) i punktu B (punkty_b.txt) w głównym katalogu<Br> oraz zadeklaruj promień</p>
        </div>
      </div>
    </div>

<div class="container">
	<div class="row">
		<div class="col-centered">
			<form action="index.php" method="post" enctype="multipart/form-data">
			    <strong>Współrzędne punktu A:</strong>
			    <input type="hidden" value="punkt_a" name="punkt_a">
			    <?php if (file_exists("punkt_a.txt")) { echo "<strong><font color=".'green'.">Plik został załadowany!</font></strong>";} else { echo "<strong><font color=".'red'.">Plik nie został załadowany!</font></strong>";} ?><br><br>
			    <strong>Współrzędne punktu B:</strong>
			    <input type="hidden" value="punkt_b" name="punkt_b">
			    <?php if (file_exists("punkt_b.txt")) {echo "<strong><font color=".'green'.">Plik został załadowany!</font></strong>";} else {echo "<strong><font color=".'red'.">Plik nie został załadowany!</font></strong>";} ?><br><br>
			    <strong>Zadeklaruj promień:</strong>
			    <input type="text" class="form-control input-md" name="promien" required><br><br>
			    <input type="submit" class="btn btn-primary" value="Przeliczamy!" name="submit">
			</form>
		</div>
	</div>
</div>

<table>
<?php } else {

		if ($_POST["punkt_a"]) {


			$licznik = "";
			$tablica = array();
			$i = 0;
			$plik1 = fopen("punkt_a.txt", "r");

		while(!feof($plik1)) {

			$line = fgets($plik1, 1024);
			if($line != ""){
				$licznik++;
				$tablica[$i] = explode(":", $line);
				$i++;

				}
			}
		}

		if ($_POST["punkt_b"]) {

			$licznik2 = "";
			$tablica2 = array();
			$i = 0;
			$plik2 = fopen("punkt_b.txt", "r");

		while(!feof($plik2)) {

			$line = fgets($plik2, 1024);
			if($line != ""){
				$licznik2++;
				$tablica2[$i] = explode(":", $line);
				$i++;

				}
			}
		}

}

