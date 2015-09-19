<?php
	$weather = file_get_contents('http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest');

	#use regex to find '1 – 3 Day Weather Forecast Summary:'
	preg_match('/3 Day Weather Forecast Summary:/i', $weather, $matches);

	print_r($matches)

?>