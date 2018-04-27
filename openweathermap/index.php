<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$url = "http://api.openweathermap.org/data/2.5/weather?id=2673722lang=en&units=metric&APPID=22ee1d58f7adae08ee71fa7c0bd24481";


	$contents = file_get_contents($url);
	$clima = json_decode($contents);

	$temp_max = $clima->main->temp_max;
	$temp_min = $clima->main->temp_min;
	$icon = $clima->weather[0]->icon.".png";

//how get today date time PHP :P
	$today = date("F j, Y, g:i a");
	$city_name = $clima->name; 

	echo $city_name . " - " .$today . "<br>";
	echo "Temp Max: " . $temp_max ."&deg;C<br>";
	echo "Temp Min: " . $temp_min ."&deg;C<br>";
	echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";
	?>
</body>
</html>

