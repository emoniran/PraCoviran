<?php include 'menu.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sección</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="seccion">
        <h3 class="subtitular text-decoration-underline text-center">Horas Nocturnas</h3>
        <div class="row">
            <div col-12 col-md-6>
                <div class="imagen"><img class="imagen d-block mx-auto" src="imagenes/HN.jpg"></div>
            </div>
            <div col-12 col-md-6>
                <p class="mb-3">
                    La pantalla principal, nos muestra las horas que hemos grabado. Podemos filtrar por
                    empleado para que nos muestre sólo las horas de este trabajador.
                    Para crear un nuevo registro, pulsaremos en “+ Crear Nuevo”.
                </p>
            </div>
            <div col-12 col-md-6>
                <div class="imagen"><img class="imagen d-block mx-auto" src="imagenes/HN02.jpg"></div>
            </div>
            <div col-12 col-md-6>
                <p class="mb-3">
                    En la pantalla de grabación, una vez elegido el trabajador, nos aparecen las horas
                    grabadas durante todo el año.<br><br>
                    Para grabar las horas, simplemente indicaremos en el día correspondiente el número de
                    horas nocturnas realizadas.<br><br>
                    Para las horas nocturnas y festivas, se utiliza el sistema decimal, por lo que si queremos
                    grabar una hora y media, debemos indicar 1.5 ó 1,5.<br><br>
                    La pantalla de grabación también se utiliza para editar y eliminar los registros. Para ello,
                    hay que seleccionar el mes que queramos editar, y aparecerá la grabación inicial que se hizo. Si
                    modificamos o eliminamos los registros y pulsamos “registrar”, el sistema guardará los
                    cambios.<br><br>
                    Un punto a tener en cuenta: si acabamos de grabar las horas para el mes de mayo, por
                    ejemplo, y una vez pulsado registrar nos damos cuenta de un error, deberemos seleccionar otro
                    mes en el desplegable, para luego volver a elegir el mes de mayo y editarlo. Si no hacemos esto,
                    el sistema no nos permite pulsar el botón de “registrar”.<br><br>
                    Los datos de horas nocturnas y festivas realizadas hasta abril, aparecerán en el SGH. Las
                    horas realizadas a partir del mes de mayo, deberán de grabarse por este sistema.<br><br>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>