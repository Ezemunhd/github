<?php  
require_once("index.html");

if ($_GET)
{

if (is_numeric ($_GET['Numero'])&& $_GET['Numero'] > 1 && $_GET['Numero']== round($_GET['Numero'],0))
{
	$Esprimo = true;
	$i = 2;
	
	while ($i < $_GET['Numero'] && $Esprimo)
	{
		
		if ($_GET['Numero']%$i == 0)
		{
			
			$Esprimo = false;
			
		}
		$i++;
		
	}
	if ($Esprimo)
		echo "<p>El numero " .$_GET['Numero'] . "Es primo </p>";
        else
        echo  "<p>El numero".$_GET['Numero'] . "No es primo</p>";			
	
}
else
{
	
	echo"<p>Incorrecto</p>";
	
}

}
?>






<h1>Verificador De Numeros</h1>
<form>
<p>¡Pon un numero natural  mayor que 1!</p>
<input Name="Numero" type="text">
<input type="submit" value="Enviar">

</form>