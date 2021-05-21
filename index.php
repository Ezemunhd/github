<?php  
$destinatarios = "viciconteezequiel@gmail.com";
$Asunto = "Hola como es que estan gente";
$Mensaje = "Esto es un prueba para ver si funcoiona.";
$Email = "Example@hotmail.com";

$header = "Enviado de juegos Ps4";
$MensajeCompleto =$Mensaje."\n Atentamente:";

mail($destinatarios, $Asunto, $MensajeCompleto, $header);
echo "enviado correctooo";
echo "mal";
?>

