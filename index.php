<?php  


$EmailTo ="viciconteezequiel@gmail.com";
$Subject = $_POST['Asunto'];
$body = $_POST['Descripcion'];
$headers = "From:".$_POST['Email'];
if (mail($EmailTo,$Subject,$body,$headers))
{
	
	$MensajeExitoso = "Su mensaje fue enviado con exito";
	
}	





?>

