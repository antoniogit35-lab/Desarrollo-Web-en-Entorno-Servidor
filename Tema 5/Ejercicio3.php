<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <style>
        .rojo {
            background-color: red;
            color: white;
        }

        .verde {
            background-color: green;
            color: white;
        }

        .azul {
            background-color: blue;
            color: white;
        }
    </style>

</head>
<body>
    
    <?php

    function crearTablaClases($clase1, $clase2, $clase3)
    {
        $tabla = "<table border='1'>";

        $tabla .= "<tr class='$clase1'>";
        $tabla .= "<td>Fila 1</td>";
        $tabla .= "</tr>";

        $tabla .= "<tr class='$clase2'>";
        $tabla .= "<td>Fila 2</td>";
        $tabla .= "</tr>";

        $tabla .= "<tr class='$clase3'>";
        $tabla .= "<td>Fila 3</td>";
        $tabla .= "</tr>";

        $tabla .= "</table>";

        return $tabla;
    }

    echo crearTablaClases("rojo", "verde", "azul");

    ?>
    
</body>
</html>