<?php  
include("index.html");

$PrevicionTiempo = "";

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");

$Array1 = explode ('Villa Rosario Weather Forecast. Providing a local hourly Villa Rosario weather forecast of rain, sun, wind, humidity and temperature. <div class="read-more-small">',$PaginaTiempo);

$Array2= explode ('>Read More</a></div></div></div></div></section><section class="row expanded">',$Array1[1]);

$PrevicionTiempo =  $Array2[0];



?>

