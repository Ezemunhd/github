<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('</div>Villa Rosario Weather Forecast. Providing a local hourly Villa Rosario weather forecast of rain, sun, wind, humidity and temperature. <div',$PaginaTiempo);
$Array2= explode ('>Read More</a></div></div></div></div></section><section class="row expanded">',$Array1[1]);
echo $Array2[0];



?>

