<?php
function nombre_curso($curso){
    switch ($curso) {
      case '0K':
        $nombre = 'Kinder';
        break;
      case '1B':
        $nombre = '1° Básico';
        break;
      case '2B':
        $nombre = '2° Básico';
        break;
      case '3B':
        $nombre = '3° Básico';
        break;
      case '4B':
        $nombre = '4° Básico';
        break;
      case '5B':
        $nombre = '5° Básico';
        break;
      case '6B':
        $nombre = '6° Básico';
        break;
      case '7B':
        $nombre = '7° Básico';
        break;
      case '8B':
        $nombre = '8° Básico';
        break;
      case 'I':
        $nombre = 'I° Medio';
        break;
      case 'II':
        $nombre = 'II° Medio';
        break;
      case 'III':
        $nombre = 'III° Medio';
        break;
      case 'IV':
        $nombre = 'IV° Medio';
        break;
    }

    return $nombre;
}

function verificacion_curso($curso){
    switch ($curso) {
      case '0K':
        $respuesta = true;
        break;
      case '1B':
        $respuesta = true;
        break;
      case '2B':
        $respuesta = true;
        break;
      case '3B':
        $respuesta = true;
        break;
      case '4B':
        $respuesta = true;
        break;
      case '5B':
        $respuesta = true;
        break;
      case '6B':
        $respuesta = true;
        break;
      case '7B':
        $respuesta = true;
        break;
      case '8B':
        $respuesta = true;
        break;
      case 'I':
        $respuesta = true;
        break;
      case 'II':
        $respuesta = true;
        break;
      case 'III':
        $respuesta = true;
        break;
      case 'IV':
        $respuesta = true;
        break;
      default:
        $respuesta = false;
        break;
    }
    return $respuesta;
}

function auxiliar($n, $m, $res){
  $str = "";
  for ($i=$n; $i < $m; $i++) {
    $str = $str.$res['fecha'][$i];
  }
  return $str;
}

?>
