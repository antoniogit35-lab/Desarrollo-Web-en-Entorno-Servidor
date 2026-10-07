<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php
    $valores = [];

    for ($i = 1; $i <= 10; $i++){
        $valores[] = 1* $i;
    }
    ?>

    <table BORDER = 1 text-align: center;>
            <tr>
                <td style="background-color: lightpink; font-weight: bold;">1 * 1</td>
                <td style="background-color: lightpink;"><?php echo $valores[0]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightcoral; font-weight: bold;">1 * 2</td>
                <td style="background-color: lightcoral;"><?php echo $valores[1]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightpink; font-weight: bold;">1 * 3</td>
                <td style="background-color: lightpink;"><?php echo $valores[2]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightcoral; font-weight: bold;">1 * 4</td>
                <td style="background-color: lightcoral;"><?php echo $valores[3]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightpink; font-weight: bold;">1 * 5</td>
                <td style="background-color: lightpink;"><?php echo $valores[4]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightcoral; font-weight: bold;">1 * 6</td>
                <td style="background-color: lightcoral;"><?php echo $valores[5]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightpink; font-weight: bold;">1 * 7</td>
                <td style="background-color: lightpink;"><?php echo $valores[6]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightcoral; font-weight: bold;">1 * 8</td>
                <td style="background-color: lightcoral;"><?php echo $valores[7]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightpink; font-weight: bold;">1 * 9</td>
                <td style="background-color: lightpink;"><?php echo $valores[8]; ?></td>
            </tr>
            <tr>
                <td style="background-color: lightcoral; font-weight: bold;">1 * 10</td>
                <td style="background-color: lightcoral;"><?php echo $valores[9]; ?></td>
            </tr>
        </table>
    
</body>
</html>