<?php
/**
* Beskrivning
*
* PHP version 5
* @category   Kategori
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/

function talTillText($tal) {

    /* Array med alla tal på svenska */
    $alla_tal = ["ett", "två", "tre", "fyra", "fem", "sex", "sju", "åtta", "nio"];

    return $alla_tal[$tal - 1];
}
?>
