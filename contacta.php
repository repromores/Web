<?php include "inc/config.php"; ?>
<?php include "inc/head.php"; ?>
<title>morés - Contacta</title>
<?php
  // $h1text : variable para fijar el H1 en cada pagina para hacerlo único y aprovechar mejor el SEO
  $h1text = "Contacta - morés";
 ?>
<?php include "inc/menu.php"; ?>

  <div class="span10">
  	<div class="content">
<h2>Contacta con nosotros</h2>
<div>
	<br>
	<p>Contacta con nosotros a través de:</p>
	<ul>
		<li>Teléfono: &nbsp&nbsp<strong>902 46 67 37 / 985 96 31 03</strong> </li>
		<li>El siguiente formulario:</li>
	</ul>
	<form action="" class="form-horizontal contacto">
	    <fieldset>
	    <div class="control-group">
		    <label class="control-label" for="nombre">Nombre:*</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="nombre" name="nombre">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="ape">Apellidos:*</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="ape" name="ape">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="mail">Email:*</label>
		    <div class="controls">
		   		<input type="email" class="span7" id="mail" name="mail">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="dir">Dirección:</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="dir" name="dir">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="pobl">Población:*</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="pobl" name="pobl">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="cp">C.P.:</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="cp" name="cp">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="tel">Teléfono:*</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="tel" name="tel">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="mov">Móvil:</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="mov" name="mov">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="fax">Fax:</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="fax" name="fax">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="act">Actividad:</label>
		    <div class="controls">
		   		<input type="text" class="span7" id="act" name="act">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="text">Mensaje:*</label>
		    <div class="controls">
		    	<textarea class="span7" id="text" name="text"></textarea>
		    </div>
	    </div>

	    <div class="control-group">
		    <div class="controls">
		    	<input type="checkbox" value="1" id="privacidad" name="privacidad">
                 He leído y acepto la política de privacidad
		    </div>
	    </div>
	   	<div class="control-group">
		    <div class="controls">
		   		<input type="checkbox" value="1" id="privacidad" name="privacidad" checked="checked">
                Deseo recibir periódicamente newsletters de Repromorés S.L. 
		    </div>
	    </div>

	    <div class="form-actions">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn">Vaciar</button>
          </div>
	    </fieldset>
    </form>
</div>

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
<?php include "inc/footer.php"; ?>