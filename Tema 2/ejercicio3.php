<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php

        $x = 10;
        $y = 5;
        $z = 2;

        $valores = [
            $x,
            $y,
            $z,
            $x + $y,
            $y * $z,
            $x / $z,
            $x + $y + $z,
            ($y + $z) / $x 
        ];

        ?>

        <table BORDER = 1>
            <tr>
                <td>X</td>
                <td><?php echo $valores[0]; ?></td>
            </tr>
            <tr>
                <td>Y</td>
                <td><?php echo $valores[1]; ?></td>
            </tr>
            <tr>
                <td>Z</td>
                <td><?php echo $valores[2]; ?></td>
            </tr>
            <tr>
                <td>X + Y</td>
                <td><?php echo $valores[3]; ?></td>
            </tr>
            <tr>
                <td>Y * Z</td>
                <td><?php echo $valores[4]; ?></td>
            </tr>
            <tr>
                <td>X / Z</td>
                <td><?php echo $valores[5]; ?></td>
            </tr>
            <tr>
                <td>X + Y + Z</td>
                <td><?php echo $valores[6]; ?></td>
            </tr>
            <tr>
                <td>(Y + Z) / X</td>
                <td><?php echo $valores[7]; ?></td>
            </tr>
        </table>



</body>
</html>