<?php  
require_once("index.html");

if ($_GET)
	
echo "<h1>Hola" .$_GET['Nombre']." </h1><br>";

?>

<form>
<input name="Nombre" type="text">
<input type="submit" value="Enviar"> 
</form>