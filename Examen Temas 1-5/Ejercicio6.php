<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
    $puntuaciones = [
        "Ana" => 72,
        "Luis" => 85,
        "Eva" => 78,
        "Pablo" => 95
    ];

    arsort($puntuaciones);

    foreach ($puntuaciones as $nombre => $puntos) {
        echo "$nombre: $puntos puntos<br>";
    }
    ?>
</body>
</html>