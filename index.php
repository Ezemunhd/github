<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('<div class="main-title__issued show-for-medium-up">Villa Rosario (Panamá, Panama) forecast issued: ',$PaginaTiempo);
$Array2 = explode ('<div class="bn-placeholder bn-placeholder-0" id="cont_bn_by_forecast">',$Array1);
echo $Array2[0];



?>

