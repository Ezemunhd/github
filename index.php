<?php  





$PrevicionTiempo = "";

$PaginaTiempo =  file_get_contents("https://www.weather-forecast.com/locations/".$_GET['InputCiudad']."/forecasts/latest");

$Array1 = explode ('Weather Today</h2> (1&ndash;3 days):</div><p class="location-summary__text"><span class="phrase">',$PaginaTiempo);

$Array2= explode ('</div><div class="location-summary__item location-summary__item--js is-truncated"><div class="location-summary__heading-with-ext"><h2 class="location-summary__heading">Villa Rosario Weather</h2>',$Array1[1]);

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

#NombreCiud
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
	transition:all 0.5s;

}
#Boton:hover
{
	background:#061d7a;
}

h1
{
	font-size:50px;
	font-family:fantasy;
	
}



#PrevicionTiempo
{
    position:relative;
   top:-168px;
   left:470px;
   width:400px;
   text-align:center;
   background-color:#a7f09c;

}

</style>

</head>



<body background="Imagenes/Nubes.png">

<form id="ClimaContainer">
 
<span id="TiempoContainer"><h1>¿Que Tiempo hace?</h1> 
<p id="NombreCiud">Introduce el Nombre de tu ciudad:</p></span>

<input type="text" name="InputCiudad" id="InputCiudad" placeholder="Por ej.Villa rosa"></input><br>
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

<div id="ParrafoError"></div>


<script type="text/javascript">

 

 </script>

</body>

</html>

