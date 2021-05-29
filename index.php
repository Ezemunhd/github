<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('</div>Villa Rosario Weather Forecast. Providing a local hourly Villa Rosario weather forecast of rain, sun, wind, humidity and temperature. <div',$PaginaTiempo);
$Array2= explode ('<a class="read-more-label read-more-label-unused" href="#">Read More</a></span></p></div>',$Array1[1]);
echo $Array2[0];



?>

