<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('<time datetime="2021-05-29T11:00:00Z">6&thinsp;am Sat 29 May 2021</time> ',$PaginaTiempo);
$Array2= explode ('<div class="bn-placeholder bn-placeholder-0" id="cont_bn_by_forecast">',$Array1);
echo $Array2[0];



?>

