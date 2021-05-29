<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('<div class="main-title__issued show-for-medium-up">Villa Rosario (Panamá, Panama) forecast issued: ',$PaginaTiempo);

echo $Array1[1];



?>

