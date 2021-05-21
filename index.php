<?php  

$EmailTo = "viciconteezequiel@gmail.com";
$subject = "hola mundo";
$body = "Que tal andangente";
$headers = "From: presidenteperon@hotmail.com";

if (mail ($EmailTo,$subject,$body,$headers))
{
	
	echo "mensaje enviado";
	
}
else
{
	
	echo "Hubo un error";
	
}



?>

