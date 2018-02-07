<?php
/**
* Räkna antal ord i inskickad text
*
* PHP version 5
* @category   Räkna ord i text
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
    <title>Räkna ord i en text</title>
</head>
<body>
    <h1>Räkna ord i texten</h1>
    <?php

    // Kolla om post-variabeln "text" finns med funktionen isset()
    if (???) {

        // Plockar ut post-variabeln "text"
        $text = ???;

        // Räkna ord med funktionen str_word_count()
        $antalOrd = ???($text);

        // Skriv ut antal ord med funktionen från funktioner.php
        ???("Antal ord i texten är $antalOrd");
    }
    ?>
    <form method="post">
        <textarea name="text"></textarea>
        <button>Räkna</button>
    </form>
</body>
</html>
