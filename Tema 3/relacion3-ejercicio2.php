<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php
    $numeros = [3, 8, 7, -6];
    ?>

    <table BORDER = "1 solid black">
        <tr background-color= "lightgray">
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>

        <?php foreach ($numeros as $numero) { ?>
            <tr>
                <td><?= $numero ?></td>
                <td><?= $numero ** 2 ?></td>
                <td><?= $numero ** 3 ?></td>
            </tr>
        <?php 
        } ?>
    </table>

</body>
</html>