<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
    <?php

    $alumnos = [
        "Antonio" => [
            "matematicas" => 5,
            "lengua" => 8.3,
            "ciencias" => 9,
            "geografia" => 7
        ],

        "Ana" => [
            "matematicas" => 8,
            "lengua" => 7,
            "ciencias" => 4.5,
            "geografia" => 9
        ],

        "Benito" => [
            "matematicas" => 9,
            "lengua" => 6.75,
            "ciencias" => 9,
            "geografia" => 3.1
        ],

        "Sergio" => [
            "matematicas" => 6,
            "lengua" => 7.5,
            "ciencias" => 8,
            "geografia" => 6
        ],

        "Cristina" => [
            "matematicas" => 7,
            "lengua" => 8,
            "ciencias" => 6.5,
            "geografia" => 9
        ]
    ];

    echo "<h2>Notas de todos los alumnos</h2>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr>";
    echo "<th>Alumno</th>";
    echo "<th>Matemáticas</th>";
    echo "<th>Lengua</th>";
    echo "<th>Ciencias Naturales</th>";
    echo "<th>Geografía</th>";
    echo "<th>Media</th>";
    echo "</tr>";

    foreach ($alumnos as $nombre => $notas) {

        $media = (
            $notas["matematicas"] +
            $notas["lengua"] +
            $notas["ciencias"] +
            $notas["geografia"]
        ) / 4;

        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>" . $notas["matematicas"] . "</td>";
        echo "<td>" . $notas["lengua"] . "</td>";
        echo "<td>" . $notas["ciencias"] . "</td>";
        echo "<td>" . $notas["geografia"] . "</td>";
        echo "<td>" . number_format($media, 3, ",", ".") . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    $alumnoBuscado = "Ana";

    echo "<h2>Notas de $alumnoBuscado</h2>";

    if (array_key_exists($alumnoBuscado, $alumnos)) {

        $notas = $alumnos[$alumnoBuscado];

        $media = (
            $notas["matematicas"] +
            $notas["lengua"] +
            $notas["ciencias"] +
            $notas["geografia"]
        ) / 4;

        echo "<table border='1' cellpadding='5'>";
        echo "<tr>";
        echo "<th>Alumno</th>";
        echo "<th>Matemáticas</th>";
        echo "<th>Lengua</th>";
        echo "<th>Ciencias Naturales</th>";
        echo "<th>Geografía</th>";
        echo "<th>Media</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$alumnoBuscado</td>";
        echo "<td>" . $notas["matematicas"] . "</td>";
        echo "<td>" . $notas["lengua"] . "</td>";
        echo "<td>" . $notas["ciencias"] . "</td>";
        echo "<td>" . $notas["geografia"] . "</td>";
        echo "<td>" . number_format($media, 3, ",", ".") . "</td>";
        echo "</tr>";

        echo "</table>";

    } else {
        echo "No existe ningún alumno con ese nombre.";
    }

    ?>
</body>
</html>