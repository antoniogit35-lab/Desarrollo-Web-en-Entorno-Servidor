<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

    function crearTablaColores($color1, $color2, $color3)
    {
        $tabla = "<table border='1'>";

        $tabla .= "<tr style='background-color: $color1;'>";
        $tabla .= "<td>Color 1</td>";
        $tabla .= "</tr>";

        $tabla .= "<tr style='background-color: $color2;'>";
        $tabla .= "<td>Color 2</td>";
        $tabla .= "</tr>";

        $tabla .= "<tr style='background-color: $color3;'>";
        $tabla .= "<td>Color 3</td>";
        $tabla .= "</tr>";

        $tabla .= "</table>";

        return $tabla;
    }

    echo crearTablaColores("red", "green", "blue");

    ?>
    
</body>
</html>