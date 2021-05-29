<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('conditions for local outdoor activities.<p class="large-loc"><b>Villa Rosario</b>',$PaginaTiempo);
echo $Array1[0];



?>

