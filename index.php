<?php  
require_once("index.html");

$Nombre = "Jose luis";

if ($Nombre == "Rob")
{
	echo "<h1>Bienvenido Rob</h1>";
}
else
{
	
	echo "<h1>Lo sentimos $Nombre .Usted no tiene  acceso al  sitema.</h1>";
	
}

$Edad ="20";

if (Edad >=18)
{
	
	echo "<h1>Su edad es apropiada para registrarse.</h1>";
	
}
else
{
	
	echo "<h1>Su edad no es apropiada para registrase.</h1>";
	
}




?>