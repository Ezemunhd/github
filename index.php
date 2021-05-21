<?php  
<?php
$para      = 'viciconteezequiel@gmail.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: ezemunhd@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($para, $titulo, $mensaje, $cabeceras))
{
echo"Perfecto";	
}
else
{
	echo"incorrecto";
}

?>
?>

