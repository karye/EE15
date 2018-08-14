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

// Kolla om post-variablerna finns
if (isset($_POST["namn"]) &&
    isset($_POST["adress"]) &&
    isset($_POST["pnr"]) &&
    isset($_POST["padress"])) {

// Plocka ut post-variablerna
    $namn = $_POST["namn"];
    $adress = $_POST["adress"];
    $pnr = $_POST["pnr"];
    $padress = $_POST["padress"];

/* Kontrollera att alla fälten är ifyllda */
    if (strlen($namn) == 0 ||
        strlen($adress) == 0 ||
        strlen($pnr) == 0 ||
        strlen($padress) == 0) {
        echo "<p>Fel: Alla fälten är inte ifyllda, försök igen!</p>";
    }

/* Kontrollera att alla fält innehåller minst tre tecken */
    if (strlen($namn) < 3 ||
        strlen($adress) < 3 ||
        strlen($pnr) < 3 ||
        strlen($padress) < 3) {
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
}