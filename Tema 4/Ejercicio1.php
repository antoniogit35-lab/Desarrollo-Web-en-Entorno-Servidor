<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php

    $ciudades = [
        "Granada"   => 150000,
        "Madrid"    => 3000000,
        "Barcelona" => 2879200,
        "Málaga"    => 240000,
        "Sevilla"   => 500000,
        "Valencia"  => 1584600,
        "Tarragona" => 485210
    ];

    echo "<h2>Tabla original</h2>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Ciudad</th>";
    echo "<th>Población</th>";
    echo "</tr>";

    foreach ($ciudades as $ciudad => $poblacion) {
        echo "<tr>";
        echo "<td>$ciudad</td>";
        echo "<td>$poblacion</td>";
        echo "</tr>";
    }

    echo "</table>";

    $ciudadesAlfabeticamente = $ciudades;
    ksort($ciudadesAlfabeticamente);

    echo "<h2>Ciudades ordenadas alfabéticamente</h2>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Ciudad</th>";
    echo "<th>Población</th>";
    echo "</tr>";

    foreach ($ciudadesAlfabeticamente as $ciudad => $poblacion) {
        echo "<tr>";
        echo "<td>$ciudad</td>";
        echo "<td>$poblacion</td>";
        echo "</tr>";
    }

    echo "</table>";
    $ciudadesPorPoblacion = $ciudades;
    asort($ciudadesPorPoblacion);

    echo "<h2>Ciudades ordenadas por población</h2>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Ciudad</th>";
    echo "<th>Población</th>";
    echo "</tr>";

    foreach ($ciudadesPorPoblacion as $ciudad => $poblacion) {
        echo "<tr>";
        echo "<td>$ciudad</td>";
        echo "<td>$poblacion</td>";
        echo "</tr>";
    }

    echo "</table>";

    $ciudadConMasPoblacion = array_keys($ciudades, max($ciudades))[0];
    $ciudadConMenosPoblacion = array_keys($ciudades, min($ciudades))[0];

    echo "<h2>Ciudad con más población</h2>";
    echo "<p>$ciudadConMasPoblacion: " . max($ciudades) . " habitantes</p>";

    echo "<h2>Ciudad con menos población</h2>";
    echo "<p>$ciudadConMenosPoblacion: " . min($ciudades) . " habitantes</p>";

    ?>
    
</body>
</html>