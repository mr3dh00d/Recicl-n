<?php include_once 'includes/db.php'; ?>
<?php
session_start();
$material = isset($_POST['material']) ? $_POST['material'] : false;
$curso = isset($_POST['curso']) ? $_POST['curso'] : false;
$peso = isset($_SESSION['peso']) ? $_SESSION['peso'] : false;

$errores = array();

if ($material == false || empty($material) == true) {
  $errores['material'] = "Porfavor selecione un material";
}else{
  switch ($material) {
    case '1':
      $puntaje = $peso*0.1;
      break;
    case '2':
      $puntaje = $peso*0.09;

      break;
    case '3':
      $puntaje = $peso*0.095;
      break;
  }
  $puntaje = (int) $puntaje;
}
if ($curso == false || empty($curso) == true) {
  $errores['curso'] = "Porfavor selecione un curso";
}

if (empty($errores) == true && $db == true  && isset($puntaje) == true) {
  $consulta = "SELECT puntos_com FROM $curso ORDER BY id DESC LIMIT 1";
  $enviar = mysqli_query($db, $consulta);
  $respuesta = mysqli_fetch_assoc($enviar);
  if (!empty($respuesta)) {
    $respuesta = (int) $respuesta['puntos_com'];
    $puntaje_com = $puntaje + $respuesta;
  }else {
    $puntaje_com = $puntaje;
  }
  $consulta = "INSERT INTO $curso VALUES (NULL, '$material', '$peso', '$puntaje', '$puntaje_com', CURDATE())";
  $enviar = mysqli_query($db, $consulta);
  if ($enviar) {
    $correcto = true;
  }
}else{
  $correcto = false;
  $errores['peso'] = $peso;
  var_dump($peso);
  $_SESSION['errores'] = $errores;
  if ($peso) {
    header("Location: formulario.php");
  }else{
    header("Location: index.php");
  }
}
?>
<?php if ($correcto): ?>
  <?php include_once 'includes/head.php'; ?>
  <div class="container jumbotron" style="margin-top: 100px">
      <div class="row">
        <div class="col">
          <h1>Su información se a guardado con éxito!</h1>
        </div>
      </div>
      <div align="center">
        <a class="btn btn-primary text-light" href="http://192.168.1.154">Volver</a>
      </div>
  </div>
  <div style="margin-top:300px"></div>
  <?php include_once 'includes/footer.php'; ?>
  <?php// header("Location: http://192.168.0.2"); ?>
<?php endif; ?>
