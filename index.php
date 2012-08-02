<?php include "inc/config.php"; ?>
<?php include "inc/head.php"; ?>
<title>Morés - reprografía, cartelería, impresión digital, stands y más</title>
<?php
  // $h1text : variable para fijar el H1 en cada pagina para hacerlo único y aprovechar mejor el SEO
  $h1text = "";
 ?>
<?php include "inc/menu.php"; ?>

  <div class="span10">
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://lorempixel.com/587/350/sports/1" alt="">
          <!-- 
          <div class="carousel-caption">
            <h4>First Thumbnail label</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </div>
           -->
        </div>
        <div class="item">
          <img src="http://lorempixel.com/587/350/sports/2" alt="">
          <!-- 
          <div class="carousel-caption">
            <h4>Second Thumbnail label</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </div>
          -->
        </div>
        <div class="item">
          <img src="http://lorempixel.com/587/350/sports/3" alt="">
          <div class="carousel-caption">
            <h4>Third Thumbnail label</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

    <div class="row">
      
      <div class="span5">
        <div class="tarjeton carteleria">
          <h2>Cartelería</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
        <div class="tarjeton rotulacion">
          <h2>Rotulación</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
        <div class="tarjeton reprografia">
          <h2>Reprografía</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
        <div class="tarjeton foto">
          <h2>Fotografía Digital</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
      </div>
      

      <div class="span5">
        <div class="tarjeton impresion">
          <h2>Impresión Digital</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
        <div class="tarjeton stands">
          <h2>Stands y Displays</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
        <div class="tarjeton digitalizacion">
          <h2>Digitalización</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
        <div class="tarjeton encuadernacion">
          <h2>Encuadernación</h2>
          <div class="tarjeton-text"><p>Sed ut perspiciatis unde omnis. Iste natus error sit voluptatem accusantium doloremque laudantium.</p></div>
        </div>
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