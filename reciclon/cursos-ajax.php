<?php include_once 'includes/head-scripts.php'; ?>
<?php include_once 'includes/db.php'; ?>
<?php include_once 'includes/aux.php'; ?>
<?php
$curso = isset($_GET['curso']) ? $_GET['curso'] : false;
$verificacion = verificacion_curso($curso);
$consulta = "SELECT id FROM $curso ORDER BY id ASC";
$enviar = mysqli_query($db, $consulta);
$respuesta = mysqli_fetch_assoc($enviar);
$total = $respuesta['id'];
$total = (int) $total;
?>
<?php if ($verificacion): ?>
  <!--<div class="container mt-4" id="cursos">-->
    <div class="row">
      <div class="col" align="center">
        <h1><?=nombre_curso($curso)?></h1>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col">
        <h3>Plástico:</h3>
        <table class="table table-bordered">
          <thead>
            <tr class="table-primary">
              <th scope="col">Fecha</th>
              <th scope="col">Gramos</th>
              <th scope="col">Puntos</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $puntos_total = 0;
            for ($i = 1; $i <= $total; $i++) {
              $consulta = "SELECT * FROM $curso WHERE id = $i AND material = 1;";
              $enviar = mysqli_query($db, $consulta);
              $respuesta = mysqli_fetch_assoc($enviar);
              if (!is_null($respuesta)) {
                $dia = (int) auxiliar(6, 8, $respuesta);
                $mes = (int) auxiliar(4, 6, $respuesta);
                $año = (int) auxiliar(0, 4, $respuesta);
                ?>
                <tr>
                  <th scope="row"><?=$dia?>/<?=$mes?>/<?=$año?></th>
                  <td><?=$respuesta['gramos']?></td>
                  <td><?=$respuesta['puntos']?></td>
                </tr>
                <?php
                $puntos_total += $respuesta['puntos'];
              }
            }
            ?>
            <tr>
              <td colspan="2"><strong>Total</strong></td>
              <td><?=$puntos_total?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col">
        <h3>Cartón:</h3>
        <table class="table table-bordered">
          <thead>
            <tr class="table-primary">
              <th scope="col">Fecha</th>
              <th scope="col">Gramos</th>
              <th scope="col">Puntos</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $puntos_total = 0;
            for ($i = 1; $i <= $total; $i++) {
              $consulta = "SELECT * FROM $curso WHERE id = $i AND material = 2;";
              $enviar = mysqli_query($db, $consulta);
              $respuesta = mysqli_fetch_assoc($enviar);
              if (!is_null($respuesta)) {
                $dia = (int) auxiliar(6, 8, $respuesta);
                $mes = (int) auxiliar(4, 6, $respuesta);
                $año = (int) auxiliar(0, 4, $respuesta);
                ?>
                <tr>
                  <th scope="row"><?=$dia?>/<?=$mes?>/<?=$año?></th>
                  <td><?=$respuesta['gramos']?></td>
                  <td><?=$respuesta['puntos']?></td>
                </tr>
                <?php
                $puntos_total += $respuesta['puntos'];
              }
            }
            ?>
            <tr>
              <td colspan="2"><strong>Total</strong></td>
              <td><?=$puntos_total?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col">
        <h3>Papel:</h3>
        <table class="table table-bordered">
          <thead>
            <tr class="table-primary">
              <th scope="col">Fecha</th>
              <th scope="col">Gramos</th>
              <th scope="col">Puntos</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $puntos_total = 0;
            for ($i = 1; $i <= $total; $i++) {
              $consulta = "SELECT * FROM $curso WHERE id = $i AND material = 3;";
              $enviar = mysqli_query($db, $consulta);
              $respuesta = mysqli_fetch_assoc($enviar);
              if (!is_null($respuesta)) {
                $dia = (int) auxiliar(6, 8, $respuesta);
                $mes = (int) auxiliar(4, 6, $respuesta);
                $año = (int) auxiliar(0, 4, $respuesta);
                ?>
                <tr>
                  <th scope="row"><?=$dia?>/<?=$mes?>/<?=$año?></th>
                  <td><?=$respuesta['gramos']?></td>
                  <td><?=$respuesta['puntos']?></td>
                </tr>
                <?php
                $puntos_total += $respuesta['puntos'];
              }
            }
            ?>
            <tr>
              <td colspan="2"><strong>Total</strong></td>
              <td><?=$puntos_total?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <!--</div>-->
<?php endif; ?>
<?php if (!$verificacion): ?>
  <?php header("Location: no_listo.php");?>
<?php endif; ?>
