<?php  

$EmailTo = "viciconteezequiel@gmail.com";
$subject = "hola mundo";
$body = "Que tal andangente";
$headers = "From: ezemunhd@gmail.com";

if (mail ($EmailTo,$subject,$body,$headers))
{
	
	echo "mensaje enviado";
	
}
else
{
	
	echo "Hubo un error";
	
}



?>

