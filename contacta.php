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
	<form action="contacta-enviar.php" class="form-horizontal contacto" method="POST">
		<input type="hidden" name="ip" value="<?php echo getIp(); ?>">
	    <fieldset>
	    <div class="control-group">
		    <label class="control-label" for="nombre">Nombre:*</label>
		    <div class="controls">
		   		<input type="text" class="span7 required" id="nombre" name="nombre">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="ape">Apellidos:*</label>
		    <div class="controls">
		   		<input type="text" class="span7 required" id="ape" name="ape">
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="mail">Email:*</label>
		    <div class="controls">
		   		<input type="email" class="span7 required" id="mail" name="mail">
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
		   		<input type="text" class="span7 required" id="pobl" name="pobl">
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
		   		<input type="text" class="span7 required" id="tel" name="tel">
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
		   		<select id="act" name="act">
				  <option value="01">01 - Agencias de publicidad</option>
				  <option value="02">02 - Alimentación - Sector agroalimentario</option>
				  <option value="03">03 - Arquitectos y aparejadores</option>
				  <option value="04">04 - Artes gráficas</option>
				  <option value="05">05 - Asociaciones colectivas</option>
				  <option value="06">06 - Asociaciones de polígonos</option>
				  <option value="07">07 - Asociaciones empresariales</option>
				  <option value="08">08 - Ayuntamientos</option>
				  <option value="09">09 - Carpintería, madera y muebles</option>
				  <option value="10">10 - Centros comerciales</option>
				  <option value="11">11 - Colegios profesionales</option>
				  <option value="12">12 - Comercio</option>
				  <option value="13">13 - Concesionarios</option>
				  <option value="14">14 - Consejerías</option>
				  <option value="15">15 - Decoración e interiorismo</option>
				  <option value="16">16 - Despachos profesionales</option>
				  <option value="17">17 - Diseñadores gráficos</option>
				  <option value="18">18 - Distribución y suministro</option>
				  <option value="19">19 - Empresa pública</option>
				  <option value="20">20 - Empresas franquiciadoras</option>
				  <option value="21">21 - Energía</option>
				  <option value="22">22 - Enseñanza</option>
				  <option value="23">23 - Entidades sin ánimo de lucro (Iglesia, Cáritas, ONG, etc)</option>
				  <option value="24">24 - Federaciones</option>
				  <option value="25">25 - Fotografía</option>
				  <option value="26">26 - Fundaciones</option>
				  <option value="27">27 - Hoteles y restaurantes</option>
				  <option value="28">28 - Industria</option>
				  <option value="29">29 - Industria auxiliar</option>
				  <option value="30">30 - Informática y telecomunicaciones</option>
				  <option value="31">31 - Ingenierías</option>
				  <option value="32">32 - Instaladores</option>
				  <option value="33">33 - Museos</option>
				  <option value="34">34 - Organismos públicos (Tesorería, Bomberos, 112, etc)</option>
				  <option value="35">35 - Organización de eventos</option>
				  <option value="36" selected="selected">36 - Particulares</option>
				  <option value="37">37 - Partidos políticos y sindicatos</option>
				  <option value="38">38 - Promoción e Inmobiliarias - Construcción</option>
				  <option value="39">39 - Sanidad</option>
				  <option value="40">40 - Sector financiero y seguros (agentes, corredores)</option>
				  <option value="41">41 - Servicios de apoyo industrial (limpiezas industriales, etc)</option>
				  <option value="42">42 - Talleres y reparaciones</option>
				  <option value="43">43 - Transportes</option>
				  <option value="44">44 - Turismo (agencias de viajes)</option>
				  <option value="45">45 - Universidades</option>
				  <option value="46">46 - Viveros de empresas</option>
				</select>
		    </div>
	    </div>

	    <div class="control-group">
		    <label class="control-label" for="text">Mensaje:*</label>
		    <div class="controls">
		    	<textarea class="span7 required" id="text" name="text"></textarea>
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
		   		<input type="checkbox" value="1" id="newsletter" name="newsletter" checked="checked">
                Deseo recibir periódicamente newsletters de Repromorés S.L. 
		    </div>
	    </div>

	    <div class="form-actions">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <div class="mensaje-error">Corrige los campos en rojo</div>
            <div class="mensaje-exito"></div>
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