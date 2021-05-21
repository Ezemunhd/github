<?php  
$destinatarios = "hola@alexcdesign.com";
$Asunto = "Hola como es que estan gente";
$Mensaje = "Esto es un prueba para ver si funcoiona.";
$Email = "Example@hotmail.com";

$header = "Enviado de juegos Ps4";
$MensajeCompleto =$Mensaje."\nAtentamente:";

mail($destinatarios, $Asunto, $MensajeCompleto, $header);
echo "<script>alert('Correo enviado  exitosamente')</script>"
echo "mal";
?>

