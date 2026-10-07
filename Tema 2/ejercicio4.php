<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
    <?php

    $matriz1[0] = "Maya";
    $matriz1[1] = "Perro";
    $matriz1[2] = "Mastín con Podenco";
    $matriz1[3] = "Canela";
    $matriz1[4] = "30";
    $matriz1[5] = "50 cm";
    $matriz1[6] = "8 meses";

    ?>

    <table BORDER = "1" CELLPADING="2" CELLSPACING= "2">
        <tr ALIGN= "center">
            <TD></TD>
            <TD>Nombre</TD><TD>Familia</TD><TD>Raza</TD><TD>Color</TD>
            <TD>Peso</TD><TD>Altura</TD><TD>Edad</TD>
        </tr>
        <tr ALIGN = "center">
            <TD>Mascota</TD>
            <TD><?php echo $matriz1[0]; ?></TD>
            <TD><?php echo $matriz1[1]; ?></TD>
            <TD><?php echo $matriz1[2]; ?></TD>
            <TD><?php echo $matriz1[3]; ?></TD>
            <TD><?php echo $matriz1[4]; ?></TD>
            <TD><?php echo $matriz1[5]; ?></TD>
            <TD><?php echo $matriz1[6]; ?></TD>
        </tr>
    </table>

</body>
</html>