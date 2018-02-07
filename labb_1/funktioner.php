<?php
/**
* Samling bra att ha funktioner
*
* PHP version 5
* @category   Funktioner
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/

// Skapa en funktion som skriver en text som en rubrik
function rubrik($text) {
    echo "<h1>$text</h1>";
}

// Räkna fram antalet av ett ord i en sträng
function countMyWord($text, $ordet) {

    // Splitta texten längs med mellanslag med funktionen explode()
    $words = explode(' ', $text);
    $count = 0;

    // Skriv ut arrayen (debug)
    //print_r($words);

    // Loopa igenom alla orden och kolla om vi hittar $ordet
    // Isåfall räkna upp
    foreach ($words as $word) {
        if ($word == $ordet) {
            $count++;
        }
    }

    // Klart! Returnera funna antal
    return $count;
}
