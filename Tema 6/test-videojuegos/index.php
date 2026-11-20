<?php

require_once "preguntas.php";
require_once "funciones.php";

$resultado = null;
$mensajeError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $respuestas = $_POST["respuestas"] ?? [];

    if (validarRespuestas($preguntas, $respuestas)) {
        $resultado = corregirTest($preguntas, $respuestas);
    } else {
        http_response_code(400);

        $mensajeError =
            "Las respuestas recibidas no son válidas. "
            . "Vuelve a completar el formulario.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museo del videojuego: rescata la partida</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <p>Archivo Nintendo · Departamento de conservación</p>
        <h1>Museo del videojuego: rescata la partida</h1>
        <p>
            Las vitrinas están preparadas, pero falta alguien capaz de
            contar su historia. Supera la prueba de acceso y consigue
            tu plaza en el equipo de conservación.
        </p>
    </header>

    <main>

        <?php

        if ($mensajeError !== "") {
            echo '<p role="alert">';
            echo escapar($mensajeError);
            echo '</p>';
        }

        if ($resultado !== null) {
            mostrarResultado($resultado);
        } else {
        ?>

            <section>
                <h2>Instrucciones del examen</h2>

                <ul>
                    <li>El test contiene <?php echo count($preguntas); ?> preguntas.</li>

                    <li>Selecciona una sola respuesta por pregunta.</li>

                    <li>Todas las preguntas valen lo mismo.</li>

                    <li>Las respuestas incorrectas no restan puntos.</li>

                    <li>Las preguntas sin responder cuentan como no acertadas.</li>
                </ul>
            </section>

            <form action="index.php" method="post">
                <?php mostrarPreguntas($preguntas); ?>
                <button type="submit">Entregar prueba de acceso</button>

            </form>

        <?php
        }
        ?>

    </main>

    <footer>
        <p>Archivo histórico del videojuego · Práctica de HTML y PHP</p>
        <p>Antonio José Heredia Fernández</p>
    </footer>

</body>
</html>