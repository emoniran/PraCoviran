<?php

$archivos = glob("*.php");

echo "<h3>Archivos PHP</h3>";
echo "<ul>";

foreach ($archivos as $archivo) {

    // Evita mostrar el propio index.php
    if ($archivo != "index.php") {
        echo "<li><a href='$archivo'>$archivo</a></li>";
    }
}

echo "</ul>";