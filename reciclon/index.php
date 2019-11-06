<?php include_once 'includes/head.php'; ?>
<?php session_start(); ?>
<script type="text/javascript">

</script>
<div id="myCarousel" class="carousel slide d-none d-md-block" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide w-100" src="img/reci.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="second-slide w-100" src="img/rec4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="third-slide w-100" src="img/rec5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   <div class="container">
		<div class="row mt-5">
			<div class="col-0 col-sm-5 col-md-3 mt-md-5">
				<img class="img-fluid float-center" src="img/Reciclon.png" alt="">
			</div>
			<div class="col-sm-7 col-md-9">
				<div class="jumbotron">
					<h4>Reciclón</h4>
          <p>¡El planeta esta en peligro! Ciclón necesita tu ayuda para reciclar. Cada kilo de plástico,
             cartón y papel que lleves a los contenedores sumará puntos a tu curso,
             para las alianza y un increíble premio.</p>
          <p>
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">Kgs</th>
                  <th scope="col">Material</th>
                  <th scope="col">Puntos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Plástico</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Cartón</td>
                  <td>90</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Papel</td>
                  <td>95</td>
                </tr>
              </tbody>
            </table>
          </p>
					<p>Una iniciativa que consta de informar sobre el medio ambiente y los daños
            que el exceso de desperdicios hace sobre nuestro planeta, a estudiantes de
            todas las edades pertenecientes al Colegio Adventista de Las Condes.</p>
				</div>
			</div>
		</div>
   </div>

    <div class="container" style="margin-top:10px">
      <div class="row">
        <div class="col">
          <h4>Beneficiarios</h4>
          <p>Nuestro proyecto beneficiaría al Colegio Adventista de Las Condes que
            integrará actividades de reciclajes, a las cuales apoyarán a los niños
            mediante la enseñanza de como cuidar el medio ambiente a través del
            reciclaje.</p>
        </div>
      </div>
    </div>

  	<div class="container" style="margin-top:60px">
      <div class="row">
        <div class="col mr-md-2">
          <h4>Objetivos</h4>
  				<p><strong>1 - </strong> Informar sobre el medio ambiente.</p>
          <p><strong>2 - </strong> Fortalecer el trabajo en equipo y solidaridad con los que nos rodean y el mundo en el que vivimos.</p>
        </div>
        <div class="col-md-8 ">
            <h4>Cronograma</h4>
            <table class="table table-borderless table-sm">
              <thead>
                <tr>
                  <th scope="col">Obj</th>
                  <th scope="col">Tarea</th>
                  <th scope="col">Sep 19</th>
                  <th scope="col">Oct 09</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Programación web y base de datos.</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Programación de sensores.</td>
                  <td>X</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td colspan="2">Elaboración de pesa</td>
                  <td>X</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td colspan="2">Retiro y diseño<br>de cajas como contenedores.</td>
                  <td>X</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td colspan="2">Implementación en el colegio.</td>
                  <td>X</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <h4 class="ml-3">Pesa</h4>
      </div>
      <div class="row">
        <div class="col-0 col-md-8">
          <p>Una celda de carga es un transductor capaz de convertir una
            fuerza en una señal eléctrica. Mediante este método
            cuantificamos la cantidad de material reciclado en puntaje y
            lo enviaremos a el servidor <a href="https://www.reciclon.tk">reciclon.tk</a> donde
            será almacenado en una base de datos. Los avances podrán
            ser revisados a través de este mismo medio. Los residuos
            serán almacenados en cajas de cartón y serán retirados
            semanalmente y trasladado a un <a href="https://www.google.com/maps/dir/Colegio+Adventista+las+Condes+-+Avenida+Apoquindo,+Las+Condes/Cerro+Colorado+5051,+Las+Condes,+Regi%C3%B3n+Metropolitana/@-33.4073021,-70.5812668,16z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x9662cedf9551e2ad:0x5d3531b3f62c8d95!2m2!1d-70.5727873!2d-33.4108709!1m5!1m1!1s0x9662cf25d053c8a7:0xad9a215b3de3d984!2m2!1d-70.5810543!2d-33.4045543!3e2">Punto Verde</a>.</p>
          </div>
        <div class="col">
          <h5>Materiales:</h5>
          <ul>
            <li type="disc">Arduino.</li>
            <li type="disc">Shield Ethernet.</li>
            <li type="disc">Hx711.</li>
            <li type="disc">EsCelda de carga.</li>
          </ul>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-0 col-md-6">
          <img class="img-fluid float-center" src="img/arduino+sensor.png" alt="">
        </div>
        <div class="col-0 col-md-6 mt-5 mt-md-3">
          <img class="img-fluid float-center" src="img/arduino.png" alt="">
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <h4>Relacion ODS</h4>
        </div>
      </div>
      <div class="row mt-2 align-items-center">
        <div class="col ml-5 ml-md-0">
          <p><img class="m-5 m-lg-0" align="center" src="img/ODS.png" width="160" height="160" alt=""></p>
        </div>
        <div class="col-md-9 col-sm-15">
          <p>Informar sobre la capacidad que tienen los humanos y las instituciones respecto a la mitigación del cambio climático, la adaptación a él, la reducción de sus efectos y la alerta temprana.</p>
        </div>
      </div>
    </div>
<script src="js/scroll.js"></script>

<?php include_once 'contacto.php'; ?>
<?php session_unset(); ?>
<?php include_once 'includes/footer.php'; ?>
