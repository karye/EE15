<?php
/**
* Hämta data Open Weather Map
*
* @category   json övning
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Temperaturen i London</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    // Url till webbtjänsten
    $url = "http://api.openweathermap.org/data/2.5/weather?q=London&
    APPID=22ee1d58f7adae08ee71fa7c0bd24481";

    // Hämtat data från webbtjänsten
    $contents = file_get_contents($url);

    // Avkoda json-data
    $jsonData = json_decode($contents);

    // Plocka ut intressant data ur json-objektet
    $koordinater = $jsonData->coord;
    print_r($koordinater);


    ?>
</body>
</html>
