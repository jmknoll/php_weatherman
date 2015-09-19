<?php
	$weather = file_get_contents('http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest');
	echo($weather);
?>