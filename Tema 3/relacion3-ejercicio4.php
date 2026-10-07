<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario anual</title>
    <style>
    </style>
</head>
<body>

<h1>Ejercicio 4</h1>

<?php
$meses = [
    "Enero" => 31,
    "Febrero" => 28,
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
];

$diasSemana = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];

$diaInicio = 0;
?>

<div>

    <?php foreach ($meses as $nombreMes => $totalDias) { ?>
        <table BORDER = "1">
            <tr>
                <th><?= $nombreMes ?></th>
            </tr>

            <tr>
                <?php foreach ($diasSemana as $posicion => $dia) { ?>
                    <th>
                        <?= $dia ?>
                    </th>
                <?php } ?>
            </tr>

            <tr>
                <?php
                for ($i = 0; $i < $diaInicio; $i++) {
                    echo "<td></td>";
                }

                for ($dia = 1; $dia <= $totalDias; $dia++) {
                    $clase = $diaInicio === 6 ? "domingo" : "";
                    echo "<td class='$clase'>$dia</td>";

                    $diaInicio++;

                    if ($diaInicio === 7) {
                        echo "</tr><tr>";
                        $diaInicio = 0;
                    }
                }

                if ($diaInicio !== 0) {
                    for ($i = $diaInicio; $i < 7; $i++) {
                        echo "<td></td>";
                    }
                }
                ?>
            </tr>
        </table>
    <?php } ?>

</div>

</body>
</html>