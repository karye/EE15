<?php
/**
 * Gör ett formulär där användaren ska fylla i namn, adress, postnr och postort. Kontrollera att alla fälten är ifyllda, och innehåller minst 3 tecken. Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror.
 *
 * PHP version 5
 * @category   Stränghantering
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 * @link
 */
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Adressuppgfter</title>
</head>

<body>
    <h1>Adressuppgifter</h1>
    <?php

// Kolla om post-variablerna finns
if (isset($_POST["namn"]) &&
    isset($_POST["adress"]) &&
    isset($_POST["pnr"]) &&
    isset($_POST["padress"]) &&
    isset($_POST["epost"])) {

    // Plocka ut post-variablerna
    $namn = $_POST["namn"];
    $adress = $_POST["adress"];
    $pnr = $_POST["pnr"];
    $padress = $_POST["padress"];
    $epost = $_POST["epost"];

    /* Ta bort mellanslag i postnumret */
    $pnr = str_replace(' ', '', $pnr);

    /* Kontrollera att alla fälten är ifyllda */
    if (strlen($namn) == 0 ||
        strlen($adress) == 0 ||
        strlen($pnr) == 0 ||
        strlen($padress) == 0 ||
        strlen($epost) == 0) {
        echo "<p>Fel: Alla fälten är inte ifyllda, försök igen!</p>";
    }

    /* Kontrollera att alla fält innehåller minst tre tecken */
    if (strlen($namn) < 3 ||
        strlen($adress) < 3 ||
        strlen($pnr) < 3 ||
        strlen($padress) < 3 ||
        strlen($epost) < 3) {
        echo "<p>Fel: Alla fälten måste vara minst tre tecken långa, försök igen!</p>";
    }

    /* Kontrollera att postnummer innehåller 5 tecken */
    if (strlen($pnr) != 5) {
        echo "<p>Fel: Postnumret måste innehålla 5 tecken, försök igen!</p>";
    }

    /* Kontrollera att postnummer bara innehåller siffror */
    if (!is_numeric($pnr)) {
        echo "<p>Fel: Postnumret måste bara innehålla siffror, försök igen!</p>";
    }

    /* Kontrollera att epost innehåller ett @, och minst en punkt. */
    if (!strstr($epost, '@') && !strstr($epost, '.')) {
        echo "<p>Fel: Epost måste innehålla '@' och minst en '.', försök igen!</p>";
    }

    /* Kontrollera också att epost är minst sex tecken lång. */
    if (strlen($epost) < 6) {
        echo "<p>Fel: Epost måste innehålla 6 tecken, försök igen!</p>";
    }
}
?>
    <form method="post">
        <label>Namn</label><input type="text" name="namn"><br>
        <label>Adress</label><input type="text" name="adress"><br>
        <label>Postnr</label><input type="text" name="pnr"><br>
        <label>Postadress</label><input type="text" name="padress"><br>
        <label>Epost</label><input type="text" name="epost"><br>
        <button>Skicka</button>
    </form>
</body>

</html>