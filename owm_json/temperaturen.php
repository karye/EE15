<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Temperaturen i Stockholm</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php
	// Adress till vädertjänsten
	$url = "http://api.openweathermap.org/data/2.5/weather?id=2673722&units=metric&APPID=22ee1d58f7adae08ee71fa7c0bd24481";

	// Hämta data och avkoda JSON-formatet
	$contents = file_get_contents($url);
	$clima = json_decode($contents);

	// Plocka ut temperaturer
	$temp_max = $clima->main->temp_max;
	$temp_min = $clima->main->temp_min;
	$icon = $clima->weather[0]->icon.".png";

	// Platsen och dagens datum
	$today = date('d-m-Y H:i:s');
	$city_name = $clima->name;

	echo "<div class=\"ruta\">";
	echo "<h3>$city_name</h3>";
	echo "<h4>$today</h4>";
	echo "<p>Temp max: $temp_max &deg;C</p>";
	echo "<p>Temp min: $temp_min &deg;C</p>";
	echo "<img src='http://openweathermap.org/img/w/$icon'>";
	echo "</div>";
	?>
</body>
</html>
