<?php
/**
* Reguljära uttryck
*
* PHP version 5
* @category   Teori
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<?php

    $text = "Det snöar idag!";

    if (preg_match("/snö/", $text)) {
        echo "<p>Hittar texten!";
    } else {
        echo "<p>Hittar inte texten!";
    }

    $text = "2173687123687 egg 3212";

    if (preg_match("/[A-ZÅÄÖ]/", $text)) {
        echo "<p>Hittar texten!";
    } else {
        echo "<p>Hittar inte texten!";
    }

    $text = "2173687123687 egg 3212";

    if (preg_match("/[^A-Z]/", $text)) {
        echo "<p>Hittar texten!";
    } else {
        echo "<p>Hittar inte texten!";
    }

    $text = "2173687123687 egg 3212";

    if (preg_match("/[g+]/", $text)) {
        echo "<p>Hittar texten!";
    } else {
        echo "<p>Hittar inte texten!";
    }

    $text = "Nilsson är mitt efternamn inte Nilson.";

    if (preg_match("/Nils{1,2}on/", $text, $hittat)) {
        echo "<p>Hittar texten!";
        print_r($hittat);
    } else {
        echo "<p>Hittar inte texten!";
    }

    $text = "http://www.dn.se";

    if (preg_match("/^www/", $text)) {
        echo "<p>Hittar texten!";
    } else {
        echo "<p>Hittar inte texten!";
    }

    $text = "http://www.servus.se";

    if (preg_match("/se|com$/", $text)) {
        echo "<p>Hittar texten!";
    } else {
        echo "<p>Hittar inte texten!";
    }

    $text = "använd";
    if (preg_match("/använd(armanual|ningsområde|)/", $text)) {
        echo "Matchar använd, användarmanual, användningsområde";
    }

    $text = 'Min e-post-adress är thohoj02@student.chalmers.se';
    $pattern = 'thohoj02@student.chalmers.se';
    $replace = "thomas@snt.se";
    $nytext = preg_replace("/$pattern/", $replace, $text);
    echo $nytext;


?>
