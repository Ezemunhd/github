
<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "prueba@solucionex.com";
    $to = "javiernuber@gmail.com";
    $subject = "Prueba de envio de email con PHP";
    $message = "Esto es un email de prueba enviado con PHP";
    $headers = "From:" . $from;
    if (mail($to,$subject,$message, $headers))
	{
    echo "Email enviado!!";
	}
	else
	{
		echo "Email vacio";
	}
?>


