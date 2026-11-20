<?php

function escapar($texto)
{
    return htmlspecialchars($texto, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

function mostrarPregunta($indice, $pregunta)
{
    $numero = $indice + 1;

    echo '<fieldset class="pregunta">';

    echo '<legend>';
    echo $numero . '. ' . escapar($pregunta["enunciado"]);
    echo '</legend>';

    foreach ($pregunta["opciones"] as $clave => $opcion) {
        $id = "pregunta_" . $indice . "_" . $clave;

        echo '<label class="opcion" for="' . escapar($id) . '">';
        echo '<input type="radio"';
        echo ' id="' . escapar($id) . '"';
        echo ' name="respuestas[' . $indice . ']"';
        echo ' value="' . escapar($clave) . '">';
        echo ' <span>' . escapar($opcion) . '</span>';
        echo '</label>';
    }

    echo '</fieldset>';
}

function mostrarPreguntas($preguntas)
{
    foreach ($preguntas as $indice => $pregunta) {
        mostrarPregunta($indice, $pregunta);
    }
}

function validarRespuestas($preguntas, $respuestas)
{
    if (!is_array($respuestas)) {
        return false;
    }

    foreach ($respuestas as $indice => $respuesta) {
        // Rechaza respuestas de preguntas que no existen.
        if (!isset($preguntas[$indice])) {
            return false;
        }

        // Cada respuesta debe ser una clave de texto.
        if (!is_string($respuesta)) {
            return false;
        }

        // La opción seleccionada debe existir en esa pregunta.
        if (!isset($preguntas[$indice]["opciones"][$respuesta])) {
            return false;
        }
    }

    return true;
}

function corregirTest($preguntas, $respuestas)
{
    $aciertos = 0;
    $errores = [];
    $total = count($preguntas);

    foreach ($preguntas as $indice => $pregunta) {
        $respuesta = $respuestas[$indice] ?? "";

        if ($respuesta === $pregunta["correcta"]) {
            $aciertos++;
        } else {
            $errores[] = [
                "numero" => $indice + 1,
                "enunciado" => $pregunta["enunciado"],
                "respuestaUsuario" => $respuesta,
                "opciones" => $pregunta["opciones"],
                "correcta" => $pregunta["correcta"]
            ];
        }
    }

    $nota = 0;

    if ($total > 0) {
        $nota = ($aciertos / $total) * 10;
    }

    return [
        "aciertos" => $aciertos,
        "total" => $total,
        "nota" => $nota,
        "errores" => $errores
    ];
}

function mostrarResultado($resultado)
{
    echo '<section class="resultado">';
    echo '<h2>Resultado del examen</h2>';
    echo '<p class="nota">';
    echo 'Nota: ' . round($resultado["nota"], 2) . ' / 10';
    echo '</p>';
    echo '<p>';
    echo 'Has acertado ' . $resultado["aciertos"];
    echo ' de ' . $resultado["total"] . ' preguntas.';
    echo '</p>';

    if ($resultado["nota"] >= 5) {
        echo '<p>¡Prueba superada! El museo te da la bienvenida.</p>';
    } else {
        echo '<p>';
        echo 'Todavía quedan piezas por descubrir. ';
        echo 'Revisa las soluciones y vuelve a intentarlo.';
        echo '</p>';
    }

    if (count($resultado["errores"]) === 0) {
        echo '<p>¡Enhorabuena! Has respondido correctamente a todo.</p>';
    } else {
        echo '<h3>Preguntas para revisar</h3>';

        foreach ($resultado["errores"] as $error) {
            echo '<article class="revision">';

            echo '<h4>';
            echo $error["numero"] . '. ';
            echo escapar($error["enunciado"]);
            echo '</h4>';
            echo '<p>Tu respuesta: ';

            if ($error["respuestaUsuario"] === "") {
                echo 'Sin responder';
            } else {
                $textoUsuario =
                    $error["opciones"][$error["respuestaUsuario"]];

                echo escapar($textoUsuario);
            }

            echo '</p>';

            $textoCorrecto = $error["opciones"][$error["correcta"]];

            echo '<p class="respuesta-correcta">';
            echo 'Respuesta correcta: ' . escapar($textoCorrecto);
            echo '</p>';
            echo '</article>';
        }
    }

    echo '<a class="boton" href="index.php">Volver a intentarlo</a>';
    echo '</section>';
}