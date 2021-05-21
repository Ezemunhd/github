<?php  
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $emailTo = "correoajoseluis@gmail.com";
    $subject = "Curso Desarrollo Web Completo";
    $body = "Me está encantando el curso!";
    $headers = "From: joseluis@example.com";

    if (mail($emailTo,$subject,$body,$headers))
    {
        echo "Mensaje enviado con éxito!";
    }
    else
    {
        echo "Hubo un error al enviar el mensajee";
    }

?>

