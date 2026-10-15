<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    function precioFinal($precio, $descuento = 10) {
        $precioConDescuento = $precio - ($precio * $descuento/100);
        return $precioConDescuento;
    }

    echo "Precio final de 100 € con 10% de descuento: " . precioFinal(100) . " €<br>";
    echo "Precio final de 80 € con 25% de descuento: " . precioFinal(80, 25) . " €";
    ?>
</body>
</html>