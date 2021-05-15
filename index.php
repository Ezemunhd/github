<?php  
require_once("index.html");

if (is_numeric ($_GET['Numero'])&& $_GET['Numero'] > 1 && $_GET['Numero']== round($_GET['Numero'],0))
{
	
	echo "<p>Excelente</p>";
}
else
{
	
	echo"<p>Incorrecto</p>";
	
}


?>






<h1>Verificador De Numeros</h1>
<form>
<p>¡Pon un numero natural  mayor que 1!</p>
<input Name="Numero" type="text">
<input type="submit" value="Enviar">

</form>