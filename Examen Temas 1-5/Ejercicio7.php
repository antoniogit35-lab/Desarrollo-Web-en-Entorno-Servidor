<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    $matriz = [
        [2,4,6],
        [1,3,5]
    ];

    $total = 0;
    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            $total += $valor;
        }
    }
    echo $total;
    ?>
</body>
</html>