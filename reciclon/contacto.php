<div class="container" id="contacto">
  <form class="jumbotron jumbotron-2" action="enviar_mail.php" method="post">
    <h1>Contacto</h1>
    <?php if (isset($_SESSION['final'])): ?>
      <?php if ($_SESSION['final']['exito']): ?><p class="text-success"><?=$_SESSION['final']['exito']?></p><?php endif; ?>
      <?php if ($_SESSION['final']['fracaso']): ?><p class="text-danger"><?=$_SESSION['final']['fracaso']?></p><?php endif; ?>
    <?php endif; ?>
    <div class="form-group">
      <input type="text" placeholder="Nombre"class="form-control <?= isset($_SESSION['errores']['nombre']) ? "is-invalid" : "" ?>" id="nombre" name="nombre" value="<?= isset($_SESSION['nombre']) ? $_SESSION['nombre'] : ""?>">
      <?php if (isset($_SESSION['errores']['nombre'])): ?>
        <div class="invalid-feedback">
          <?=$_SESSION['errores']['nombre']?>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <input type="email" name="email" placeholder="ejemplo@ejemplo.com" class="form-control <?= isset($_SESSION['errores']['email']) ? "is-invalid" : "" ?>" id="email" aria-describedby="emailHelp" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ""?>">
      <?php if (isset($_SESSION['errores']['email'])): ?>
        <div class="invalid-feedback">
          <?=$_SESSION['errores']['email']?>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <textarea name="mensaje" id="mensaje" class="form-control <?= isset($_SESSION['errores']['mensaje']) ? "is-invalid" : "" ?>"rows="8" placeholder="Mensaje"><?= isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : ""?></textarea>
      <?php if (isset($_SESSION['errores']['mensaje'])): ?>
        <div class="invalid-feedback">
          <?=$_SESSION['errores']['mensaje']?>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <div width="100" height="100" class="g-recaptcha" data-sitekey="6LdINbsUAAAAAK6eTzcdXjo3fXxeU2CzeRv309Xk"></div>
      <?php if (isset($_SESSION['errores']['captcha'])): ?>
          <small class="form-text text-danger"><?=$_SESSION['errores']['captcha']?></small>
      <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
