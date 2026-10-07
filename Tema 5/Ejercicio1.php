<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php

    function crearBoletin($nombre, $notas){
        $html = "<h1>Boletín de notas</h1>"
        . "<p><strong>Alumno:</strong> " . $nombre . "</p>"
        . "<ul>";

        foreach($notas as $asignatura => $nota) {
            $html .= "<li>"
            . "<strong>" . $asignatura . ":</strong> "
            . $nota
            . "</li>";
        }

        $html .= "</ul>";

        return $html;
    }

    $nombre = "Juan Ramírez";

    $notas = [
        "Matemáticas" => "Sobresaliente",
        "Lengua" => "Notable",
        "Historia" => "Notable",
        "Dibujo" => "Insuficiente"
    ];

    echo crearBoletin($nombre, $notas);
    ?>
</body>
</html>