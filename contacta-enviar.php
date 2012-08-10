<?php



// Varios destinatarios
$para  = 'ramon.kamibayashi@mores.es';

// subject
$titulo = 'Ficha de Contacto del Cliente';

$ip 	    = $_POST["ip"];
$nombre		= $_POST["nombre"];
$ape      = $_POST["ape"];
$email 		= $_POST["mail"];
$dir      = $_POST["dir"];
$pobl 		= $_POST["pobl"];
$cp 	    = $_POST["cp"];
$tel      = $_POST["tel"];
$mov      = $_POST["mov"];
$fax      = $_POST["fax"];
$seccion  = $_POST["act"];
$texto 		= $_POST["text"];
$tel      = $_POST["tel"];

$fecha    = date("d-m-Y");
$hora     = date ("h:i");

include "inc/plantilla-contacto.php";



// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: <'.$para.'>' . "\r\n";
$cabeceras .= 'From: '.$nombre.' '.$ape.' <'.$email.'>' . "\r\n";

// Mail it
if(mail($para, $titulo, $mensaje, $cabeceras)){
  echo "Su mensaje se ha enviado correctamente!";
}else{
  echo "Error, inténtelo de nuevo.";
}
?>