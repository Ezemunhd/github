<?php  
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $emailTo = "viciconteezequiel@gmail.com";
    $subject = "Curso Desarrollo Web Completo";
    $message = "Me está encantando el curso!";
    $headers = "From: ezevici123@gmail.com";

    if (mail($emailTo,$subject,$message,$headers))
    {
        echo "Mensaje enviado con éxito!";
    }
    else
    {
        echo "Hubo un error al enviar el mensajes";
    }

?>

