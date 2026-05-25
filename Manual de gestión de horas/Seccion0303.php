<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sección</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h3 class="subtitular text-decoration-underline text-center">Compensaciones Realizadas</h3>
    <div class="seccion">
        <div class="column">
            <div class="row">
                <div class="imagen"><img class="imagen d-block mx-auto" src="imagenes/CR.jpg"></div>
            </div>
            <div class="row">
                <p>
                    Desde esta pantalla se grabarán todas las compensaciones con descansos de horas extras.
                    Esta pantalla es similar a la utilizada para la grabación de horas, y se utilizará tanto para
                    filtrar
                    información como para gestionar y eliminar registros.
                </p>
                <p>
                    Para crear un nuevo registro, es decir, para grabar el descanso de una hora extra, debemos
                    pulsar en “+ Crear Nuevo”.
                </p>
            </div>
            <div class="row">
                <div class="imagen"><img class="imagen d-block mx-auto" src="imagenes/CR02.jpg"></div>
                <div class="row">
                    <p>En esta pantalla de grabación también aparecen las horas extras pendientes de compensar
                        y pagadas. En el ejemplo de la pantalla, como el trabajador ya ha descansado dos horas, el saldo
                        deja de ser 5,25 para pasar a 3,25. <br>
                        La grabación se realiza completando los campos señalados. Obviamente, para este caso,
                        sólo se indicará el trabajador, la fecha y las horas que ha compensado. <br>
                        Si el trabajador descansa la jornada entera (8 horas), se informará la compensación de 8
                        horas, ajustando la hora de inicio y la hora de fin con la de la jornada del trabajador. <br>
                        Las horas extras a compensar realizadas hasta abril de 2013, no están grabadas en el
                        SGH, ya que al no conocer si se han compensado o no podrían distorsionar el saldo. Por tanto,
                        todas aquellas horas a compensar realizadas hasta abril, deberán ser controladas por fuera del
                        sistema, no grabando tampoco su disfrute (aparecería un saldo negativo). <br>
                        Las principales novedades del SGH respecto al sistema anterior sobre las horas extras,
                        son que permite controlar el saldo de horas a compensar de cada trabajador, realizando, además,
                        la conversión en tiempo real. </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>