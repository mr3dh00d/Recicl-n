<?php include_once 'includes/head-scripts.php'; ?>
<?php include_once 'includes/aux.php'; ?>
<?php include_once 'includes/db.php'; ?>
<?php
$cursos = array('0K','1B','2B','3B','4B','5B','6B','7B','8B','I','II','III','IV');
$total = count($cursos);
$orden = array();
for ($i = 0; $i < count($cursos); $i++) {
  $cuenta = 0;
  $consulta = "SELECT puntos_com FROM $cursos[$i] ORDER BY id DESC LIMIT 1";
  $enviar = mysqli_query($db, $consulta);
  $respuesta_1 = mysqli_fetch_assoc($enviar);
  $puntos_com = $respuesta_1['puntos_com'];
  $array_curso = array('curso' => $cursos[$i], 'puntaje' => $puntos_com);
  for ($j = 0; $j < count($cursos); $j++) {
    $consulta = "SELECT puntos_com FROM $cursos[$j] ORDER BY id DESC LIMIT 1";
    $enviar = mysqli_query($db, $consulta);
    $respuesta = mysqli_fetch_assoc($enviar);
    $puntos_com_2 = $respuesta['puntos_com'];
    if ($puntos_com >= $puntos_com_2) {
      $cuenta++;
    }
  }
  $posicion = $total - $cuenta;
  if (isset($orden[$posicion])) {
    $posicion++;
  }
  if (!is_null($respuesta_1)) {
    $orden[$posicion] = $array_curso;
  }
}
?>
    <h1 align="center">Ranking</h1>
   <table class="table table-bordered mt-5">
     <thead>
       <tr class="table-primary">
         <th scope="col">Lugar</th>
         <th scope="col">Curso</th>
         <th scope="col">Puntaje</th>
       </tr>
     </thead>
     <tbody>
       <?php for ($i=0; $i < count($orden); $i++) { ?>
         <tr class="<?= ($i == 0 || $i == 1 || $i == 2) ? "table-warning" : ""?>">
           <th scope="row"><?=$i+1?></th>
           <td><?=nombre_curso($orden[$i]['curso'])?></td>
           <td><?=$orden[$i]['puntaje']?></td>
         </tr>
       <?php } ?>
     </tbody>
   </table>
 <?php if (empty($orden)): ?>
   <div class="container">
     <div class="row jumbotron">
       <div class="col"><h1>Aún no hay datos ingresados :(</h1></div>
     </div>
   </div>
 <?php endif; ?>
 <div style="margin-top:100px"></div>
