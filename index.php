<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('<span>Villa Rosario</span></a></li> </ol></div><div class="description__text">',$PaginaTiempo);
$Array2= explode ('<div class="b-forecast interactive-forecast-cont"><div class="bnr">',$Array1[1]);
echo $Array2[0];



?>

