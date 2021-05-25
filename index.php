<?php  
include("index.html");

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");
$Array1 = explode ('</div></div></div></div><div class="row"><div class="main-title__container column"><div class="main-title__issued show-for-medium-up">Villa Rosario (Panamá, Panama) forecast issued: <time datetime="2021-05-24T17:00:00Z">12&thinsp;pm Mon 24 May 2021</time> local time <section class="next-update-countdown"><span data-countdown=""><span class="time-estimate countdown-hidden"><div><span class="countdown-delimiter">|</span> Updates in:&nbsp;<span class="hours-part"><span class="hours"></span>hr&nbsp;</span><span class="minutes">',$PaginaTiempo);

echo $Array1[1];



?>

