<?php
/**
* Omvandla celsius till farenheit eller omvänt.
*
* PHP version 5
* @category   Omräknare
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Omvandla mellan celsius och farenheit</title>
</head>
<?php

/* Kontrollerar att data finns */
if (isset($_POST["temp"]) && isset($_POST["omvandla"])) {

    /* Ta emot data */
    $temp_in = $_POST["temp"];
    $omvandla = $_POST["omvandla"];

    /* Kontrollera åt vilket håll? */
    if ($omvandla == "CF") {

        /* Omvandla till Farenheit */
        $temp_ut = 9/5 * $temp_in + 32;

        /* Skriv ut svaret */
        echo "$temp_in&deg; Celsius motsvarar $temp_ut&deg; Fahrenheit";
    } else {

        /* Omvandla till Celsius */
        $temp_ut = ($temp_in - 32) / 9/5;

        /* Skriv ut svaret */
        echo "$temp_in&deg; Fahrenheit motsvarar $temp_ut&deg; Celsius";
    }
}
?>
    <form action="upg_2_4.php" method="post">
        <label>Ange temperatur</label>
        <input type="number" name="temp" value="0"><br>
        <input type="radio" name="omvandla" value="FC">Omvandla från F° till C°
        <input type="radio" name="omvandla" value="CF">Omvandla C° till F°<br>
        <button>Omvandla</button>
    </form>
</body>
</html>
