<?php include_once 'includes/head.php'; ?>
<div class="container mt-4" id="curso"></div>
<script type="text/javascript">
    function funcion_ajax() {
        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX
        var time = $.ajax({
            url: 'cursos-ajax.php?curso=<?=$_GET['curso']?>', //indicamos la ruta donde se genera la hora
            dataType: 'text',//indicamos que es de tipo texto plano
            async: false     //ponemos el parámetro asyn a falso
        }).responseText;
        //actualizamos el div que nos mostrará la hora actual
        document.getElementById('curso').innerHTML = time;
    }
    //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
    setInterval(funcion_ajax, 1000);
</script>
<?php include_once 'includes/footer.php'; ?>
