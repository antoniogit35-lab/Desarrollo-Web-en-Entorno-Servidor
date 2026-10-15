<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    function calcularMedia($notas) {
        $sumaNotas = 0;
        $numeroNotas = 0;

        foreach($notas as $nota) {
            $sumaNotas += $nota;
            $numeroNotas++;
        }

        return $sumaNotas / $numeroNotas;
    }

    $notas = [6,8,4,10];
    
    $media = calcularMedia($notas);

    echo "La media de las notas es: $media";
    ?>
</body>
</html>