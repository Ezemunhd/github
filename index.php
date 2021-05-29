<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('<li><a href="/countries/Panama"><span>Panama</span>',$PaginaTiempo);
$Array2= explode ('<div class="b-forecast interactive-forecast-cont"><div class="bnr">',$Array1[1]);
echo $Array2[0];



?>

