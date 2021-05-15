<?php  
require_once("index.html");

if ($_GET)
	
echo "<h1>Hola" .$_GET['Nombre']." </h1><br>";

$Numero ="";

echo "Numero";

?>




<form>
Escribe tu nombre:
<input name="Nombre" type="text">
<input type="submit" value="Enviar"> 
</form>



<form>

<input Name="Numero" type="text">
<input type="submit" value="Enviar">

</form>