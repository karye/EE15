<?php
/**
* Ändra bakgrundsfärg via formulär
*
* PHP version 5
* @category   Formuläret
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Ändra bakgrundsfärg - v2</title>
</head>
<?php

/* Kontrollerar att vi data finns */
if (isset($_POST["bg"])) {

    /* Ta emot data */
    $bg = $_POST["bg"];

    /* Ändra bakgrundsfärgen */
    echo "<body style=\"background: $bg\">";
} else {
    echo "<body>";
}
?>
    <form action="upg_2_3.php" method="post">
        <label>Välj bakgrundsfärg</label>
        <input type="radio" name="bg" value="red">Röd
        <input type="radio" name="bg" value="blue">Blå
        <input type="radio" name="bg" value="green">Grön
        <input type="radio" name="bg" value="yellow">Gul<br>
        <button>Måla bakgrund</button>
    </form>
</body>
</html>
