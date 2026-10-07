<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AA</title>
</head>
<body>

    <?php
        $kilometros = 350;
        $combustible = 28.5;

        $consumoMedio = $combustible / $kilometros;

        echo "Kilómetros recorridos: $kilometros Km<br>";
        echo "Combustible consumido: $combustible L <br>";
        echo "Combustible medio consumido: $consumoMedio L/Km"
    ?>
    
</body>
</html>