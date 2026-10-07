<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php

    function crearBoletin($alumno)
    {
        $media = ($alumno["nota1"] + $alumno["nota2"] + $alumno["nota3"]) / 3;

        $media = round($media, 2);

        $html = "<h1>Boletín de notas</h1>";

        $html .= "<p>";
        $html .= "<strong>Nombre:</strong> "
            . $alumno["nombre"] . " "
            . $alumno["apellidos"];
        $html .= "</p>";

        $html .= "<table border='1'>";

        $html .= "<tr>";
        $html .= "<th>Asignatura</th>";
        $html .= "<th>Nota</th>";
        $html .= "</tr>";

        $html .= "<tr>";
        $html .= "<td>Nota 1</td>";
        $html .= "<td>" . $alumno["nota1"] . "</td>";
        $html .= "</tr>";

        $html .= "<tr>";
        $html .= "<td>Nota 2</td>";
        $html .= "<td>" . $alumno["nota2"] . "</td>";
        $html .= "</tr>";

        $html .= "<tr>";
        $html .= "<td>Nota 3</td>";
        $html .= "<td>" . $alumno["nota3"] . "</td>";
        $html .= "</tr>";

        $html .= "<tr>";
        $html .= "<th>Nota final</th>";
        $html .= "<th>" . $media . "</th>";
        $html .= "</tr>";

        $html .= "</table>";

        return $html;
    }

    $alumno = [
        "nombre" => "Antonio",
        "apellidos" => "García López",
        "nota1" => 7,
        "nota2" => 8.5,
        "nota3" => 6
    ];

    echo crearBoletin($alumno);

    ?>
    
</body>
</html>