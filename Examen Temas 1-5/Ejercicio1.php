<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    $numero = -8;

    $resultado = match (true) {
            $numero < 0 => "Negativo",
            $numero === 0 => "Cero",
            $numero > 0 => "Positivo",
            default => "Número no válido"
        };

        echo $resultado;
    ?>
</body>
</html>