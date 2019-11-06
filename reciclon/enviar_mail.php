<?php include_once 'includes/db.php'; ?>
<?php
//Inincio de sesion
session_start();
//Recepcion de variables
$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : false;
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : false;
$email = $_POST['email'];
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : false;

$secret = '6LdINbsUAAAAABRGXhTgJYeY3U1m59R5Nkehv_Fo';

//array de errores
$errores = array();
if (empty($captcha)){
  $errores['captcha'] = "Porfavor verifique el captcha";
}else{
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
	$arr = json_decode($response, TRUE);
	if(!$arr['success']){
		$errores['captcha'] = "Error al comprobar Captcha";
	}
}
if(empty($nombre)) {
  $errores['nombre'] = "El nombre esta vacío";
}
if(empty($email)) {
  $errores['email'] = "El email esta vacío";
}
if(empty($mensaje)) {
  $errores['mensaje'] = "El mensaje esta vacío";
}

if (count($errores) == 0 && $arr['success'] == true) {
  $consulta = "INSERT INTO contacto VALUES (NULL, '$nombre', '$email', '$mensaje')";
  $enviar = mysqli_query($db, $consulta);
  if ($enviar) {
    $_SESSION['final']['exito'] = "Su mensaje ha sido enviado con exito";
  }else {
    $_SESSION['final']['fracaso'] = "Su mensaje no ha podído ser enviado";
  }
}else{
  $_SESSION['errores'] = $errores;
  $_SESSION['email'] = $email;
  $_SESSION['nombre'] = $nombre;
  $_SESSION['mensaje'] = $mensaje;
}

header("Location: index.php#contacto");

//mail($to, $subject, $message, $headers);
//header("Location: index.php");
?>
