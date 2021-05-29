<?php  


$PrevicionTiempo = "";

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/Villa-Rosario/forecasts/latest");

$Array1 = explode ('Villa Rosario Weather Forecast. Providing a local hourly Villa Rosario weather forecast of rain, sun, wind, humidity and temperature. <div class="read-more-small">',$PaginaTiempo);

$Array2= explode ('>Read More</a></div></div></div></div></section><section class="row expanded">',$Array1[1]);

$PrevicionTiempo =  $Array2[0];


?>

<html>


<head>
<meta charset="utf-8">
<title>¿Que tiempo hace?</title>
<script src="jQuery.js"> </script>


<style type="text/css">
#ClimaContainer
{
	text-align:center;
	padding:120px;


}

p
{
	position:relative;
	top:-28px;
	font-size:20px;
	font-family:cursive;
	
	
}

#InputCiudad
{
	width:500px;
	height:40px;
	border-radius:5px;	
	font-size:20px;
		border-style:none;
}

#Boton
{
	background-color:#4884d4;
	border-radius:10px;
	color:white;
	font-size:18px;
	font-family:sans-serif;
	margin:50px;
	width:80px;
	height:40px;
	border-style:none;

}

h1
{
	font-size:150px;
	font-family:fantasy;
	
}



#PrevicionTiempo
{
	background-color:red;
	font-size:200px;
}

</style>

</head>



<body background="Imagenes/Nubes.png">

<form id="ClimaContainer">
 
<span id="TiempoContainer"><h1>¿Que Tiempo hacee?</h1> 
<p>Introduce el Nombre de tu ciudad:</p></span>

<input id="InputCiudad" placeholder="Por ej.Villa rosa"></input><br>
<span id="BotonContainer"><input id="Boton" type="submit"></input></span>

</form>

<div id="PrevicionTiempo">
 <?php

if ($PrevicionTiempo)
{	
echo $PrevicionTiempo;
}
?>
</div>



<script type="text/javascript">


 </script>

</body>

</html>

