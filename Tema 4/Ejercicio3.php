<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php

    $mascotas = [
        0 => [
            "nombre" => "Pepe",
            "peso" => 4.5,
            "color" => "Marrón",
            "edad" => 12
        ],

        1 => [
            "nombre" => "Sparky",
            "peso" => 3,
            "color" => "Blanco",
            "edad" => 2
        ],

        2 => [
            "nombre" => "Tobby",
            "peso" => 7.2,
            "color" => "Beige",
            "edad" => 8
        ],

        3 => [
            "nombre" => "Bigotes",
            "peso" => 4,
            "color" => "Negro",
            "edad" => 9
        ],

        4 => [
            "nombre" => "Ricky",
            "peso" => 0.1,
            "color" => "Verde",
            "edad" => 2
        ]
    ];



    echo "<h2>Todas las mascotas</h2>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nombre</th>";
    echo "<th>Peso</th>";
    echo "<th>Color</th>";
    echo "<th>Edad</th>";
    echo "</tr>";

    foreach ($mascotas as $codigo => $mascota) {
        echo "<tr>";
        echo "<td>$codigo</td>";
        echo "<td>" . $mascota["nombre"] . "</td>";
        echo "<td>" . $mascota["peso"] . "</td>";
        echo "<td>" . $mascota["color"] . "</td>";
        echo "<td>" . $mascota["edad"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";


    echo "<h2>Peso de la mascota con código 3</h2>";

    echo $mascotas[3]["peso"] . " kg";



    echo "<h2>Color de Sparky</h2>";

    foreach ($mascotas as $mascota) {
        if ($mascota["nombre"] == "Sparky") {
            echo $mascota["color"];
        }
    }



    $mascotaMasMayor = $mascotas[0];

    foreach ($mascotas as $mascota) {
        if ($mascota["edad"] > $mascotaMasMayor["edad"]) {
            $mascotaMasMayor = $mascota;
        }
    }

    echo "<h2>Mascota más mayor</h2>";

    echo "Nombre: " . $mascotaMasMayor["nombre"] . "<br>";
    echo "Peso: " . $mascotaMasMayor["peso"] . " kg<br>";
    echo "Color: " . $mascotaMasMayor["color"] . "<br>";
    echo "Edad: " . $mascotaMasMayor["edad"] . " años<br>";



    $mascotaConMenosPeso = $mascotas[0];

    foreach ($mascotas as $mascota) {
        if ($mascota["peso"] < $mascotaConMenosPeso["peso"]) {
            $mascotaConMenosPeso = $mascota;
        }
    }

    echo "<h2>Mascota que pesa menos</h2>";

    echo $mascotaConMenosPeso["nombre"];

    ?>
</body>
</html>