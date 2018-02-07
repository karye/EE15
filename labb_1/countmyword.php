<?php
/**
* Räkna hur många gånger mitt ord
* förekommer i inskickad text
*
* PHP version 5
* @category   Räkna specifikt ord
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/

// Inkludera koden från filen "funktioner.php"
include 'funktioner.php';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Räkna mitt ord i en text</title>
</head>
<body>
    <h1>Räkna ordet i texten</h1>
    <?php

    // Kalla om post-variabeln "text" och "ordet" finns då gör vi saker
    if (isset($_POST["text"]) && isset($_POST["ordet"])) {

        // Plocka ut post-variabeln "text" och "ordet"
        $text = $_POST["text"];
        $ordet = $_POST["ordet"];

        // Räkna hur många ggr $ordet förekommer i texten
        $antalOrd = countMyWord($text, $ordet);

        // Skriv ut $antalOrd som en rubrik mha vår funktion
        rubrik($antalOrd);
    }
    ?>
    <form method="post">
        <textarea name="text"></textarea><br>
        <input type="text" name="ordet"><br>
        <input type="submit" value="Räkna">
    </form>
</body>
</html>
