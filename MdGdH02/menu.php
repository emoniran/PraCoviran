<?php
$pagina_actual = $_GET['pagina'] ?? 'content/Seccion01.php';
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img class="imagen d-block mx-auto" src="imagenes/logo.jpg" alt="Logo" width="42" height="35">
      Manual de Gestión
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item <?php if ($pagina_actual == 'content/Seccion01.php') echo 'active-menu'; ?>">
          <a class="nav-link" href="index.php?pagina=content/Seccion01.php">Sistema de Gestión de Horas</a>
        </li>

        <li class="nav-item <?php if ($pagina_actual == 'content/Seccion02.php') echo 'active-menu'; ?>">
          <a class="nav-link" href="index.php?pagina=content/Seccion02.php">Pantalla principal</a>
        </li>

        <li class="nav-item dropdown d-flex align-items-center <?php if ($pagina_actual == 'content/Seccion03.php' || $pagina_actual == 'content/Seccion0302.php' || $pagina_actual == 'content/Seccion0303.php') echo 'active-menu'; ?>">
          <a class="nav-link" href="index.php?pagina=content/Seccion03.php">Horas Extras</a>
          <a class="nav-link dropdown-toggle dropdown-toggle-split px-1" href="#" id="navDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
          <ul class="dropdown-menu" aria-labelledby="navDropdown1">
            <li><a class="dropdown-item" href="index.php?pagina=content/Seccion0302.php">Horas Extras Realizadas</a></li>
            <li><a class="dropdown-item" href="index.php?pagina=content/Seccion0303.php">Compensaciones Realizadas</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown d-flex align-items-center <?php if ($pagina_actual == 'content/Seccion04.php' || $pagina_actual == 'content/Seccion0402.php' || $pagina_actual == 'content/Seccion0403.php') echo 'active-menu'; ?>">
          <a class="nav-link" href="index.php?pagina=content/Seccion04.php">Horas Nocturnas y Festivas</a>
          <a class="nav-link dropdown-toggle dropdown-toggle-split px-1" href="#" id="navDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
          <ul class="dropdown-menu" aria-labelledby="navDropdown2">
            <li><a class="dropdown-item" href="index.php?pagina=content/Seccion0402.php">Horas Nocturnas</a></li>
            <li><a class="dropdown-item" href="index.php?pagina=content/Seccion0403.php">Horas Festivas</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown d-flex align-items-center <?php if ($pagina_actual == 'content/Seccion05.php' || $pagina_actual == 'content/Seccion0502.php' || $pagina_actual == 'content/Seccion0503.php') echo 'active-menu'; ?>">
          <a class="nav-link" href="index.php?pagina=content/Seccion05.php">Distribución Irregular de la Jornada</a>
          <a class="nav-link dropdown-toggle dropdown-toggle-split px-1" href="#" id="navDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
          <ul class="dropdown-menu" aria-labelledby="navDropdown3">
            <li><a class="dropdown-item" href="index.php?pagina=content/Seccion0502.php">Horas Realizadas</a></li>
            <li><a class="dropdown-item" href="index.php?pagina=content/Seccion0503.php">Horas a descansar/recuperar</a></li>
          </ul>
        </li>

        <li class="nav-item <?php if ($pagina_actual == 'content/Seccion06.php') echo 'active-menu'; ?>">
          <a class="nav-link" href="index.php?pagina=content/Seccion06.php">Reporting</a>
        </li>
      </ul>
    </div>
  </div>
</nav>