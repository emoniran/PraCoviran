<?php
$pagina = $_GET['pagina'] ?? 'content/Seccion01.php';

$archivo_pagina = $pagina;
if (!file_exists($archivo_pagina)) {
    $pagina = 'content/Seccion01.php'; 
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manual de Gestión de Horas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include 'menu.php'; ?>

    <main class="container-fluid">
        <?php include $pagina; ?>
    </main>

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>