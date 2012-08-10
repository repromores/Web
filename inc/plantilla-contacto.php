<?php 
$mensaje = '
<html>
<head>
<title>Ficha de Contacto del Cliente</title>
<link rel="important stylesheet" href="chrome://messagebody/skin/messageBody.css">
</head>
<body>
<table border=0 cellspacing=0 cellpadding=0 width="100%" class="header-part1">
	<tr>
		<td><b>Asunto: </b>Ficha de Contacto del Cliente</td>
	</tr>
	<tr>
		<td><b>De: </b>'.$email.'</td>
	</tr>
	<tr>
		<td><b>Fecha: </b>'.$fecha.' '.$hora.'</td>
	</tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width="100%" class="header-part2">
	<tr>
		<td><b>Para: </b>'.$para.'</td>
	</tr>
</table>

<br>De: <br />
IP: '.$ip.'<br />
Para: '.$email.'<br/>
Mensaje: 
	<fieldset>
		<legend>
			<strong>Ficha del cliente</strong>
		</legend>
		<table>
			<tr>
				<td>Fecha:</td>
				<td>'.$fecha.'</td>
			</tr>
			<tr>
				<td>Nombre o raz&oacute;n social<sup>*</sup>:</td>
				<td>'.$nombre.' '.$ape.'</td>
			</tr>
			<tr>
				<td>Poblaci&oacute;n<sup>*</sup>:</td>
				<td>'.$pobl.'</td>
			</tr>
			<tr>
				<td>Tel&eacute;fono<sup>*</sup>:</td>
				<td>'.$tel.'</td>
			</tr>
			<tr>
				<td>Correo electr&oacute;nico<sup>*</sup>:</td>
				<td>'.$email.'</td>
			</tr>
			<tr>
				<td>Actividad de la empresa<sup>*</sup>:</td>
				<td>'.$seccion.'</td>
			</tr>
			<tr>
				<td valign="top">Observaciones:</td>
				<td>'.$texto.'</td>
			</tr>
		</table>
	</fieldset>

</body>
</html>
';