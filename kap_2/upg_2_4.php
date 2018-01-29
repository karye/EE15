<?php
/**
* Omvandla celsius till farenheit.
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
    <title>Omvandla celsius till farenheit</title>
</head>
<?php

/* Kontrollerar att data finns */
if (isset($_POST["temp"])) {

    /* Ta emot data */
    $celsius = $_POST["temp"];

    /* Omvandla till Farenheit */
    $farenheit = 9/5 * $celsius + 32;

    /* Skriv ut svaret */
    echo "$celsius&deg; Celsius motsvarar $farenheit&deg; Fahrenheit";
}
?>
    <form action="upg_2_4.php" method="post">
        <label>Ange temperatur i Celsius</label>
        <input type="number" name="temp" value="0"><br>
        <button>Omvandla till Farenheit</button>
    </form>
</body>
</html>
