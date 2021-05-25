<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('</h1><div class="main-title__weather-icon show-for-medium-up"><div class="weather-wrapper"><img alt="Villa Rosario Weather Forecast" src="https://www.weather-forecast.com/assets/wxvicons/daymodrain-b3970e7ed59aebac3a70cdb4a2bff38b.svg",$PaginaTiempo />');

echo "$Array1";



?>

