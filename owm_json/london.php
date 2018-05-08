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
    $url = "http://api.openweathermap.org/data/2.5/weather?q=London&APPID=22ee1d58f7adae08ee71fa7c0bd24481&units=metric";

    // Hämtat data från webbtjänsten
    $contents = file_get_contents($url);

    // Avkoda json-data
    $jsonData = json_decode($contents);

    // Plocka ut intressant data ur json-objektet
    // Plocka ut $koordinater
    $koordinater = $jsonData->coord;
    //print_r($koordinater);
    //echo "<br>";

    // Plocka ut vädret
    $weather = $jsonData->weather;
    //print_r($weather);
    //echo "<br>";
    $weatherDescription = $jsonData->weather[0]->description;
    //print_r($weatherDescription);

    $temp_min = $jsonData->main->temp_min;
    $temp_max = $jsonData->main->temp_max;

    echo "<h3>London</h3>";
    echo "<p>Max temp: $temp_max&deg; C</p>";
    echo "<p>Min temp: $temp_min&deg; C</p>";
    ?>
</body>
</html>
