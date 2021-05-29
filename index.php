<?php  


$PrevicionTiempo = "";

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");

$Array1 = explode ('Villa Rosario Weather Forecast. Providing a local hourly Villa Rosario weather forecast of rain, sun, wind, humidity and temperature. <div class="read-more-small">',$PaginaTiempo);

$Array2= explode ('>Read More</a></div></div></div></div></section><section class="row expanded">',$Array1[1]);

$PrevicionTiempo =  $Array2[0];

echo $PrevicionTiempo;

?>

<html>


<head>
<meta charset="utf-8">
<title>¿Que tiempo hace?</title>
<script src="jQuery.js"> </script>

<link rel="stylesheet" type="text/css" href="Index.css">

</head>



<body background="Imagenes/Nubes.png">

<form id="ClimaContainer">
 
<span id="TiempoContainer"><h1>¿Que Tiempo hace?</h1> 
<p>Introduce el Nombre de tu ciudad:</p></span>

<input id="InputCiudad" placeholder="Por ej.Villa rosa"></input><br>
<span id="BotonContainer"><input id="Boton" type="submit"></input></span>

</form>

<div id="PrevicionTiempo">
 <?php


echo $PrevicionTiempo;

?>
</div>



<script type="text/javascript">


 </script>

</body>

</html>

