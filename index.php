<?php  


$EmailTo ="viciconteezequiel@gmail.com";
$Subject = "Hola";
$body = "holis pa";
$headers = "From: viciconteezequiel@gmail";
if (mail($EmailTo,$Subject,$body,$headers))
{
	
	$MensajeExitoso = "Su mensaje fue enviado con exito";
	
}	





?>

