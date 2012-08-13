<?php
	print_r($_POST);

	$email			 	= $_SESSION["email"];
	$descripcion 		= $_POST["descripcion"];
	$archivos			= $_POST["archivossubidos"];
	$nombre 			= $_SESSION["nombre"];
	$apellidos			= $_SESSION["apellidos"];
	$nif 				= $_SESSION["nif"];
	$telefono  			= $_SESSION["telefono"];
	$presupuesto		= $_POST["presupuesto"];
	$ciudadRecogida 	= $_POST["ciudadRecogida"];
	

?>