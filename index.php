<?php  
require_once("index.html");

$Error ="";
$MensajeExitoso="";

if ($_POST)
	
{
	
 if (!$_POST["Email"])
 {
	 $Error .="Es obligatorio  una direccion de  email.<br>";	
	 
 }
 
 if (!$_POST["Asunto"])
 {
	 
	 $Error .="Es obligatorio Poner un asunto en el correo.<br>";
	 
 }
 
 if (!$_POST["Descripcion"])
 {
	 
	 $Error .="Es obligatorio agregar el contenido <br>";
	 
 }
 
 if ($_POST["Email"] && filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL)== false)
 {
	 
	 $Error .="Tu correo electronico no es valido.<br>";
	  
 }
 
 if ($Error!="")
{

   $Error = "Hubo un error en alguno es estos campos".$Error;
       			
}
else
{
$Destinatario = 'viciconteezequiel@gmail.com';
$Subject = $_POST['Asunto'];
$Mensaje= $_POST['Descripcion'];
$email = "From:".$_POST['Email'];

$header ="Enviado de JuegosDigitales"; 
mail($Destinatario, $Subject, $Mensaje, $header);
echo "<script>alert("Correo enviado correctamente")</script>"

}
 
}



?>

