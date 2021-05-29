<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('</div>Villa Rosario Weather Forecast. Providing a local hourly Villa Rosario weather forecast of rain, sun, wind, humidity and temperature. <div',$PaginaTiempo);
$Array2= explode ('<div class="small-12 large-4 columns hide-for-small-only map-cont-on-combined"><h3>Panama Weather Map</h3><!--[if lte IE 8]',$Array1[1]);
echo $Array2[0];



?>

