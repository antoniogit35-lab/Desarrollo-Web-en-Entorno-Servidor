<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>

<?php
$alumnos = [
    "Rafa" => 4,
    "Antonio" => 5,
    "Sergio" => 6,
    "Cristina" => 7,
    "Oliver" => 8,
    "Nico" => 9,
    "Jesús" => 10
];
?>

<table BORDER = "1 solid black">
    <tr BACKGROUND-COLOR= "lightgray">
        <th>Alumno</th>
        <th>Nota</th>
        <th>Calificación</th>
    </tr>

    <?php foreach ($alumnos as $nombre => $nota) {

        $calificacion = match (true) {
            $nota >= 0 && $nota <= 4 => "Suspenso",
            $nota === 5 => "Aprobado",
            $nota === 6 => "Bien",
            $nota === 7 || $nota === 8 => "Notable",
            $nota === 9 => "Sobresaliente",
            $nota === 10 => "Matrícula de honor",
            default => "Nota no válida"
        };
    ?>
        <tr>
            <td><?= $nombre ?></td>
            <td><?= $nota ?></td>
            <td><?= $calificacion ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>