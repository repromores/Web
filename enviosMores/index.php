<?php include($_SERVER['DOCUMENT_ROOT']."web/inc/config.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."web/inc/head.php"); ?>
<title>morés - Contacta</title>
<?php
  // $h1text : variable para fijar el H1 en cada pagina para hacerlo único y aprovechar mejor el SEO
  $h1text = "Contacta - morés";
 ?>
<?php include($_SERVER['DOCUMENT_ROOT']."web/inc/menu.php"); ?>

  <div class="span10">
  	<div class="content">















<script type="text/javascript">
function controladorKeyPress(e){
var keyEnter=13;
if(e.keyCode==keyEnter)
validarFormulario();
}
function validarFormulario(){
var er_email = /^(.+\@.+\..+)$/
// Si no pasa el test del email
if(!er_email.test(document.form1.email.value)){
alert("El email introducido no es válido");
document.form1.email.focus();
return 0;
}
// Si no escribe la password
else if(document.form1.password.value==""){
alert("Debe introducir la password del usuario");
document.form1.password.focus();
return 0;
}
// Si llegó aquí -> todo correcto -> se envia formulario
else
document.form1.submit();
}
function mostrarAyuda(){
var ancho=600, alto=400;
var x=(screen.width - ancho)/2;
var y=(screen.height - alto)/2;
window.open('manualUsuarioWeb/index.html', 'Manual de Usuario',
'width='+ancho+',height='+alto+',left='+x+',top='+y+
',scrollbars=yes,menubar=no,toolbar=no,location=no,directories=no,resizable=no,status=no');
}
</script>
<!-- Formulario para validar el usuario -->
<div class="nav">
<img src="imagenes/iconos/paso1on.gif" width="28" height="13" style="border:none;" alt="Paso 1" />
<strong>Sistema de Envío de Archivos de Morés</strong>
</div>
<div class="nav">
<img src="imagenes/iconos/error.png" width="15" height="15" style="border:none;"  alt="Si tiene alguna duda" />
<strong>Si tiene alguna duda de cómo funciona el Sistema de Envíos, llámenos al teléfono 985 96 31 03.</strong>
</div>
<table class="tablaLogin" id="tablaLogin" width="90%">
<tr>
<td colspan="2">
<h5>Sistema de Envío de Archivos de Morés</h5>
<p>
Bienvenido al sistema de envío de archivos donde podrá realizar pedidos a las distintas secciones que existen en Morés.
<br/>
Si tiene una <u><b>cuenta de usuario del anterior Sistema de Envíos</b></u> puede conectarse con esos datos.
<br/>
También podrá establecer y modificar sus datos personales
para agilizar la realización de sus trabajos.
</p>
<p>
Si tiene alguna duda de cómo realizar el envío puede consultar
el manual de usuario:
</p>
<form action="http://www.mores.es/enviosMores/manualUsuarioWeb/index.html" target="_blank">
<input type="submit" value="Manual de usuario"/>			
</form>
<p>
Para que funcione correctamente la subida de archivos debe tener instalado
el Adobe Flash Player:
</p>
<form action="http://get.adobe.com/es/flashplayer/" target="_blank">
<input type="submit" value="Obtener Flash Player"/>
</form>
</td>
</tr>
<tr>
<td>
<h5>Administración Usuarios</h5>
</td>
<td>
<h5>Acceso al Sistema de Envíos de Morés</h5>
</td>
</tr>
<tr>
<td>
Elija una de las siguientes opciones:
<br/><br/>
<form method="post" action="envios-nuevoUsuario.php">
<input type="submit" name="nuevoUsuario" value="Nuevo usuario"/>
</form>
<form method="post" action="envios-recuperarPassword.php">
<input type="submit" name="recuperarPassword" value="Recuperar contrase&ntilde;a"/>
</form>
</td>
<td>
<form id="form1" name="form1" method="post" action="./vistaUsuarios.php">
<table>
<tr>
<td><label for="email">Email: </label></td>
<td>
<input type="text" name="email" id="email" />
</td>
</tr>
<tr>
<td><label for="password">Password: </label></td>
<td>
<input type="password" name="password" id="password" onkeydown="controladorKeyPress(event)"/>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<input type="button" name="entrar" id="entrar"
value="Entrar" onclick="validarFormulario()"/>
</td>
</tr>
</table>
</form>
</td>
</tr>
</table>



















  	</div>
  </div>

  <div class="span3">
    
  <div class="envio-archivos">
    <h2>Envío de Archivos</h2>
    <p>Envía tus archivos y recogelos en cualquiera de nuestras tiendas</p>
    <input type="submit" class="btn" value="Entrar">
  </div>

  </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."web/inc/footer.php"); ?>