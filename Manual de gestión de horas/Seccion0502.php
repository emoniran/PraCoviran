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
        <h3 class="subtitular text-decoration-underline text-center">Horas Realizadas</h3>
        <div class="row">
            <div col-12 col-md-6>
                <div class="imagen"><img class="imagen d-block mx-auto" src="imagenes/HR.jpg"></div>
            </div>
            <div col-12 col-md-6>
                <p class="mb-3">
                    El funcionamiento para la grabación de la distribución irregular de la jornada, es muy
                    similar al que se utiliza para la grabación de horas extras. Únicamente hay dos matices
                    diferenciadores: El primero es que todas las horas que se realizan son a compensar, y el segundo
                    es que la compensación se realiza 1 hora a 1 hora.
                </p>
                <p class="mb-3">
                    En esta primera pantalla, podremos tanto filtrar la información, como gestionar y eliminar
                    los registros creados.
                </p>
                <p class="mb-3">
                    Para crear un nuevo registro, pulsaremos en “+ Crear Nuevo”:
                </p>
            </div>
            <div col-12 col-md-6>
                <div class="imagen"><img class="imagen d-block mx-auto" src="imagenes/HR02.jpg"></div>
            </div>
            <div col-12 col-md-6>
                <p class="mb-3">
                    Al seleccionar el trabajador, a la derecha del nombre, nos aparecerá el saldo horario
                    resultante de la distribución irregular.
                </p>
                <p class="mb-3">
                    Para grabar los datos, cumplimentaremos todos los campos y pulsaremos “registrar”.
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>