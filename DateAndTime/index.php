<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $today = getdate();
        $mth = $today['month'];
        $weekDay = $today['weekday'];
        $monthDay = $today['mday'];
        $year = $today['year'];

        $days = Array(
            "Monday" => "Poniedziałek",
            "Tuesday" => "Wtorek",
            "Wednesday" => "Środa",
            "Thursday" => "Czwartek",
            "Friday" => "Piątek",
            "Saturday" => "Sobota",
            "Sunday" => "Niedziela",
        );
        $months = Array(
            "January" => "Styczeń",
            "February" => "Luty",
            "March" => "Marzec",
            "April" => "Kwiecień",
            "May" => "Maj",
            "June" => "Czerwiec",
            "July" => "Lipiec",
            "August" => "Sierpień",
            "September" => "Wrzesień",
            "October" => "Pańdziernik",
            "November" => "Listopad",
            "December" => "Grudzień",
        );

        print_r($today);
        echo '<br/><br/>';
        //Zadadanie 1 - Napisz skrypt, który na podstawie danych pobranych z tablicy zwróconej przez funkcję getdate() wyświetli bieżącą datę. W dacie nazwa miesiąca zostanie podana w j. pl.

        echo 'dziś jest ' . $monthDay . ' ' . $months[$mth] . ' ' . $year;
        echo '<br/><br/>';

        // Zadanie 2 - Napisz skrypt któryt będzie wyświetlał bieżacy dzień tygodnia w podanej postaci: Dziś jest środa.

        echo 'dziś jest ' . $days[$weekDay];
        echo '<br/><br/>';
        //Zadanie 3 - Napisz skrypt wyświetlający liczbę dni, które uplyneły od początku roku oraz liczbę dni, które pozostały do końca roku.

        $daysFromTheBeginning = $today['yday'];
        echo 'od początku roku mineło ' . $daysFromTheBeginning . ' dni';
        echo '<br/><br/>';
        $daysIn2018 = 365;
        $daysToTheEnd = $daysIn2018 - $today['yday'];
        echo 'do końca roku pozostało ' . $daysToTheEnd . ' dni';
        echo '<br/><br/>';

        //Zadanie 4 - napisz skrypt, który na podstawie danych: data urodzenia 1966-09-24 obliczny ile użytkownik ma lat
        $birtDay = strtotime('1966-09-24');
        $birthYear = date("Y", $birtDay);
        $currentYear = $today['year'];
        $timeTmp = $currentYear - $birthYear;
        echo 'hipek ma '.$timeTmp.' lata';
        ?>
    </body>
</html>
