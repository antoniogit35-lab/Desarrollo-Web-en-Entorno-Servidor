<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    $importe = 120;

    if ($importe <= 0) {
        echo "El importe debe ser mayor que 0.";
    } else {
        if ($importe >= 100) {
            $descuento = $importe * 0.10;
        } else {
            $descuento = 0;
        }

        $precioFinal = $importe - $descuento;

        echo "Importe: $importe €<br>";
        echo "Descuento: $descuento €<br>";
        echo "Precio final: $precioFinal €";
    }
    ?>
</body>
</html>