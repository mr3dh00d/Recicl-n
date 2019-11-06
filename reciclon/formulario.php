<?php include_once 'includes/head.php'; ?>
<?php session_start(); ?>
<?php if (isset($_POST['peso']) == false && isset($_SESSION['errores']) == false){
  header("Location: index.php");
}
if(isset($_POST['peso']) == true){
  $peso = $_POST['peso'] * 1000;
}else{
  $peso = $_SESSION['errores']['peso'];
}?>
<div class="container">
  <form class="jumbotron mt-5" action="val-peso.php" method="post">
    <div class="row">
      <div class="col">
        <h1>Peso: <?=$peso?> gr</h1>
        <?php $_SESSION['peso'] = $peso; ?>
      </div>
      <div class="col">
        <select class="form-control <?= isset($_SESSION['errores']['material']) ? "is-invalid" : "" ?>" name="material">
          <option value="">--Material--</option>
          <option value="1">Plastico</option>
          <option value="2">Cartón</option>
          <option value="3">Papel</option>
        </select>
      </div>
      <div class="col">
        <select class="form-control <?= isset($_SESSION['errores']['curso']) ? "is-invalid" : "" ?>" name="curso">
          <option value="">--Curso--</option>
          <option value="0K">Kinder</option>
          <option value="1B">1° Básico</option>
          <option value="2B">2° Básico</option>
          <option value="3B">3° Básico</option>
          <option value="4B">4° Básico</option>
          <option value="5B">5° Básico</option>
          <option value="6B">6° Básico</option>
          <option value="7B">7° Básico</option>
          <option value="8B">8° Básico</option>
          <option value="I">I° Medio</option>
          <option value="II">II° Medio</option>
          <option value="III">III° Medio</option>
          <option value="IV">IV° Medio</option>
        </select>
      </div>
    </div>
    <?php if (isset($_SESSION['errores'])): ?>
      <div class="row">
        <div class="col"></div>
        <div class="col"><small class="form-text text-danger"><?=$_SESSION['errores']['material']?></small></div>
        <div class="col"><small class="form-text text-danger"><?=$_SESSION['errores']['curso']?></small></div>
      </div>
    <?php endif; ?>
    <div class="row mt-3">
      <div class="col">
	      <input class="btn btn-primary" type="submit" value="Guardar">
      </div>
    </div>
  </form>
</div>
<?php if (isset($_SESSION['errores'])) {
  unset($_SESSION['errores']);
}?>
<?php include_once 'includes/footer.php'; ?>
