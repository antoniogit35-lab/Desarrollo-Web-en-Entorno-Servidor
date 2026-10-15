<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    function sumarFilas($matriz) {
        $sumas = [];

        foreach($matriz as $fila) {
            $sumaFila = 0;
            
            foreach($fila as $valor) {
                $sumaFila += $valor;
            }

            $sumas[] = $sumaFila;
        }

        return $sumas;
    }

    $matriz = [
        [2,4,6],
        [1,3,5]
    ];

    $sumas = sumarFilas($matriz);

    foreach($sumas as $indice => $suma) {
        $numeroFila = $indice + 1;
        echo "Fila $numeroFila: $suma<br>";
    }
    ?>
</body>
</html>