<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Bartłomiej Mazurek - Praca domowa PHP - punkty - podejście proceduralne</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

        <h1 style="text-align: center;">Zadeklarowany promień wynosi <?php 
        session_start();
        unset($_SESSION["wspolrzedne_ok"]);
        unset($_SESSION["wspolrzedne_nok"]);

        $promien = $_POST['promien']; 
        echo $promien;

        ?></h1>

        <div class="container">
          <input type="submit" class="btn btn-primary" name="session_u" value="Powrót" onclick="window.location='index.php'"">
        </form>

        <div class="container" style="padding: 40px;" >
            <div class="content">

            <table class="table table-bordered" style="float: left; width: 33%;">
                <th colspan='3'>Wsp. punktu A z pliku:</th>
                <?php
                $punkt_a_ok = array();
                $i = 0;
                for($i = 0; $i < $licznik; $i++) {
                  echo "<tr><td><strong>".$i."."."</strong></td><td>"." "."Wsp. X: ".$tablica[$i][0]."</td><td>"."Wsp. Y: ".$tablica[$i][1]."</td><tr>";


                }
                ?>
            </table>
            <table class="table table-bordered" style="float: left; width: 33%;">
                <th colspan='3'>Wsp. punktu B z pliku:</th>
                <?php
                $i = 0;
                for($i = 0; $i < $licznik2; $i++) {
                  echo "<tr><td><strong>".$i."."."</strong></td><td>"." "."Wsp. X: ".$tablica2[$i][0]."</td><td>"."Wsp. Y: ".$tablica2[$i][1]."</td><tr>";
                }
                ?>
            </table>
            <table class="table table-bordered" style="float: left; width: 33%;">
                <th>Odległość p. A od p. B:</th><th>Promień:</th>
                <?php
                for ($i = 0; $i < $licznik; $i++) {

                  
                  echo Wyswietl($tablica[$i][0], $tablica[$i][1], $tablica2[$i][0] ,$tablica2[$i][1], $promien);
                  echo WspOk($tablica[$i][0], $tablica[$i][1], $tablica2[$i][0] ,$tablica2[$i][1], $promien, $i);
                  }

                ?>
            </table>

            </div>
          </div>

          
          <div class="container" style="padding: 40px;" >
            <div class="content">

            <table class="table table-bordered" style="float: left; width: 33%;">
                <thead>
                  <tr>
                    <th colspan='2'>Wszystkie wsp.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                $i = 0;
                for($i = 0; $i < 10; $i++) {

                  echo "<tr><td>"." "."Współrzędna X: ".$tablica[$i][0]."</td><td>"."Współrzędna Y: ".$tablica[$i][1]."</td><tr>";
                  echo "<tr><td>"." "."Współrzędna X: ".$tablica2[$i][0]."</td><td>"."Współrzędna Y: ".$tablica2[$i][1]."</td><tr>";
                }
                ?>
                </tbody>
              </table>

              <table class="table table-bordered" style="float: left; width: 33%;">
                <thead>
                  <tr>
                    <th></th>
                    <th colspan='4'>Wsp. Ok</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th></th>
                    <th colspan='2'>Punkt A</th>
                    <th colspan='2'>Punkt B</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th></th>
                    <th>X</th>
                    <th>Y</th>
                    <th>X</th>
                    <th>Y</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                for($i = 0; $i < 10; $i++) {

                  if (($_SESSION["wspolrzedne_ok"][$i] != "")) {

                  echo "<tr>";
                  echo "<td><strong>".$i."</strong></td>";
                  echo "<td>".$_SESSION["wspolrzedne_ok"][$i][0]."</td>";
                  echo "<td>".$_SESSION["wspolrzedne_ok"][$i][1]."</td>";
                  echo "<td>".$_SESSION["wspolrzedne_ok"][$i][2]."</td>";
                  echo "<td>".$_SESSION["wspolrzedne_ok"][$i][3]."</td>";
                  echo "</tr>";
                      }

                    }
                
                ?>
                </tbody>


                <table class="table table-bordered" style="float: left; width: 33%;">
                <thead>
                  <tr>
                    <th></th>
                    <th colspan='4'>Wsp. nOk</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th></th>
                    <th colspan='2'>Punkt A</th>
                    <th colspan='2'>Punkt B</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th></th>
                    <th>X</th>
                    <th>Y</th>
                    <th>X</th>
                    <th>Y</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                for($i = 0; $i < 10; $i++) {

                  if ($_SESSION["wspolrzedne_nok"][$i] != "") {

                  echo "<tr>";
                  echo "<td><strong>".$i."</strong></td>";
                  echo "<td>".$_SESSION["wspolrzedne_nok"][$i][0]."</td>";
                  echo "<td>".$_SESSION["wspolrzedne_nok"][$i][1]."</td>";
                  echo "<td>".$_SESSION["wspolrzedne_nok"][$i][2]."</td>";
                  echo "<td>".$_SESSION["wspolrzedne_nok"][$i][3]."</td>";
                  echo "</tr>";
                      }

                    }
                
                ?>
                </tbody>

            </div>
          </div>
      </div>
    </div>

  </div>
</div>