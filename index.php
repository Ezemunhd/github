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
 
 {
	
}



?>

