<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>SMHI prognos</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body>
	<canvas id="canvas" width="800" height="450"></canvas>
	<?php 
	$url = "https://opendata-download-metfcst.smhi.se/api/category/pmp2g/version/2/geotype/point/lon/16/lat/58/data.json";

	$contents = file_get_contents($url);
	$prognos = json_decode($contents);
	$timeSeries = $prognos->timeSeries;
	$labels = "[";
	$data = "[";

	foreach ($timeSeries as $timeSerie) {
		$validTime = $timeSerie->validTime;
		$validTime = substr($validTime, 0, -4);
		$parameters = $timeSerie->parameters;
		foreach ($parameters as $parameter) {
			$name = $parameter->name;
			$temp = $parameter->values[0];
			
			if ($name == 't') {
				$labels .= "'$validTime', ";
				$data .= "$temp, ";
			}

		}
	}

	$labels = substr($labels, 0, -2) . "]";
	$data = substr($data, 0, -2) . "]";

	echo "<script>
	  	window.onload = function() {
	  		var config = {
	  			type: 'line',
	  			data: {
	  				labels: $labels,
	  				datasets: [{
	  					label: 'SMHI prognos',
	  					data: $data,
	  					borderColor: '#3e95cd',
	  					fill: false
	  				}]
	  			}
	  		};
			var ctx = document.getElementById('canvas').getContext('2d');
			new Chart(ctx, config);
		};
		</script>";
	?>
</body>
</html>