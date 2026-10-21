<?php
// Biblioteca centralizada de casos.
// Cada caso apunta a su propio archivo (Caso01.php ... Caso12.php, ejem.php, ejercicio1.php)
// y a las funciones de lib/funciones.php que se muestran en la vista de código.
// Para agregar un caso nuevo: crea su archivo, sus funciones en lib/funciones.php
// y añade una entrada más al arreglo.
require_once __DIR__ . '/funciones.php';

function todosLosCasos(): array
{
    $cat1 = 'Funciones definidas por el usuario';
    $cat2 = 'Funciones de cadena o string';
    $cat3 = 'Funciones numéricas o matemáticas';
    $cat4 = 'Funciones de fecha y hora';
    $cat5 = 'Ejemplos de aula';

    return [
        '1' => ['etiqueta' => 'CASO 01', 'categoria' => $cat1, 'titulo' => 'Cuadrado de un número',
            'enunciado' => 'Desarrollar un programa con una función que solicite el ingreso de un número entero y muestre el cuadrado de dicho valor. Se aplica isset() y formularios en HTML y CSS.',
            'archivo' => 'Caso01.php', 'funciones' => ['calcularCuadrado']],
        '2' => ['etiqueta' => 'CASO 02', 'categoria' => $cat1, 'titulo' => 'Producto de dos números',
            'enunciado' => 'Desarrollar un programa con una función que solicite la carga de dos valores (números enteros) y muestre el producto de los mismos.',
            'archivo' => 'Caso02.php', 'funciones' => ['producto']],
        '3' => ['etiqueta' => 'CASO 03', 'categoria' => $cat1, 'titulo' => 'Saludo por nombre',
            'enunciado' => 'Desarrollar un programa con una función que reciba un nombre como parámetro y devuelva un mensaje de saludo.',
            'archivo' => 'Caso03.php', 'funciones' => ['Nombre']],
        '4' => ['etiqueta' => 'CASO 04', 'categoria' => $cat1, 'titulo' => 'Evaluación de nota aleatoria',
            'enunciado' => 'Generar notas aleatorias de 0 a 20 con rand(). Si la nota es mayor o igual a 13 mostrar "Felicitaciones" mediante una función; de lo contrario mostrar "Inténtalo en otra oportunidad!!!".',
            'archivo' => 'Caso04.php', 'funciones' => ['evaluarNota']],
        '5' => ['etiqueta' => 'CASO 05', 'categoria' => $cat1, 'titulo' => 'Suma de dos números enteros',
            'enunciado' => 'Desarrollar una función para calcular la suma de dos números enteros ingresados desde el teclado, creada en un archivo externo (lib/funciones.php) e invocada con include/require.',
            'archivo' => 'Caso05.php', 'funciones' => ['sumarNumeros']],
        '6' => ['etiqueta' => 'CASO 06', 'categoria' => $cat1, 'titulo' => 'Módulo de cálculo financiero (IGV)',
            'enunciado' => 'Crear la función calcularIgv(float $monto): float que devuelva el 18% del monto, invocarla con require_once y mostrar el subtotal, IGV y total mediante un formulario HTML.',
            'archivo' => 'Caso06.php', 'funciones' => ['calcularIgv']],
        '7' => ['etiqueta' => 'CASO 07', 'categoria' => $cat2, 'titulo' => 'Generador de código de ticket',
            'enunciado' => 'Construir un programa que pida una categoría de producto y un código secundario. Limpiar los espacios de la izquierda en la categoría con ltrim(), los de la derecha en el código con rtrim() y convertir la categoría a mayúsculas con strtoupper() para generar un código único unificado.',
            'archivo' => 'Caso07.php', 'funciones' => ['generarCodigoTicket']],
        '8' => ['etiqueta' => 'CASO 08', 'categoria' => $cat2, 'titulo' => 'Normalización de nombres propios',
            'enunciado' => 'Solicitar el nombre completo de una persona (con espacios adicionales o mayúsculas/minúsculas desordenadas). Limpiar espacios con trim(), convertir a minúsculas con strtolower() y capitalizar cada palabra con ucwords().',
            'archivo' => 'Caso08.php', 'funciones' => ['normalizarNombre']],
        '9' => ['etiqueta' => 'CASO 09', 'categoria' => $cat3, 'titulo' => 'Área de un círculo',
            'enunciado' => 'Solicitar el radio de un círculo y, mediante una función, calcular el área con Área = π × r² usando pi() y pow(). Mostrar el resultado con dos decimales con number_format().',
            'archivo' => 'Caso09.php', 'funciones' => ['calcularAreaCirculo']],
        '10' => ['etiqueta' => 'CASO 10', 'categoria' => $cat3, 'titulo' => 'Hipotenusa - Teorema de Pitágoras',
            'enunciado' => 'Solicitar el valor de los dos catetos (a y b) de un triángulo rectángulo y calcular la hipotenusa con h = √(a² + b²) mediante sqrt() y pow(). Mostrarla con 2 decimales con number_format().',
            'archivo' => 'Caso10.php', 'funciones' => ['calcularHipotenusa']],
        '11' => ['etiqueta' => 'CASO 11', 'categoria' => $cat4, 'titulo' => 'Marca de tiempo y fecha completa',
            'enunciado' => "Configurar la zona horaria a 'America/Lima' y diseñar una función que muestre los segundos transcurridos desde el 1 de enero de 1970 con time(), la fecha en formato d/m/Y y la hora en formato de 12 horas con AM/PM (h:i:s A).",
            'archivo' => 'Caso11.php', 'funciones' => ['obtenerFechaYHora']],
        '12' => ['etiqueta' => 'CASO 12', 'categoria' => $cat4, 'titulo' => 'Reloj multizona horaria',
            'enunciado' => 'Comparar la fecha y hora actual entre Lima, Nueva York y Madrid cambiando dinámicamente la zona horaria y mostrando la hora en formato de 12 horas.',
            'archivo' => 'Caso12.php', 'funciones' => ['obtenerHorasMultizona']],
        'ej1' => ['etiqueta' => 'EJEMPLO 1', 'categoria' => $cat5, 'titulo' => 'ejem.php: funciones con y sin retorno',
            'enunciado' => 'Ejemplo de aula: funciones definidas por el usuario con y sin parámetros, con return, tipos de datos, y funciones de cadena (strlen, strtoupper, substr).',
            'archivo' => 'ejem.php', 'funciones' => []],
        'ej2' => ['etiqueta' => 'EJEMPLO 2', 'categoria' => $cat5, 'titulo' => 'ejercicio1.php: uso de lib/funciones.php',
            'enunciado' => 'Ejemplo de aula: invocar con include las funciones de una librería externa (lib/funciones.php) y mostrar el promedio devuelto por una función.',
            'archivo' => 'ejercicio1.php', 'funciones' => ['mensaje', 'pon_tu_nombre', 'con_parametros', 'promedio']],
    ];
}

function obtenerCaso(string $id): ?array
{
    $todos = todosLosCasos();
    return isset($todos[$id]) ? ['id' => $id] + $todos[$id] : null;
}

function idsCasos(): array
{
    return array_map('strval', array_keys(todosLosCasos()));
}

/** Panel de control: menú, caso anterior y caso siguiente. */
function panelNavegacion(string $id): string
{
    $ids  = idsCasos();
    $pos  = array_search($id, $ids, true);
    $prev = ($pos !== false && $pos > 0) ? $ids[$pos - 1] : null;
    $next = ($pos !== false && $pos < count($ids) - 1) ? $ids[$pos + 1] : null;

    $h = '<div class="d-flex flex-wrap gap-2 justify-content-between mt-4">';
    $h .= $prev !== null
        ? '<a class="btn btn-nav" href="caso.php?id=' . e($prev) . '">&larr; Caso Anterior</a>'
        : '<span class="btn btn-nav disabled">&larr; Caso Anterior</span>';
    $h .= '<a class="btn btn-nav" href="index.php">Menú Principal</a>';
    $h .= $next !== null
        ? '<a class="btn btn-nav" href="caso.php?id=' . e($next) . '">Caso Siguiente &rarr;</a>'
        : '<span class="btn btn-nav disabled">Caso Siguiente &rarr;</span>';
    return $h . '</div>';
}

/** Lee del archivo real el código de una función (con su comentario previo). */
function fuenteFuncion(string $nombre): string
{
    $r      = new ReflectionFunction($nombre);
    $lineas = file($r->getFileName());
    $fin    = $r->getEndLine();
    $ini    = $r->getStartLine() - 1;
    // Incluir los comentarios // que están justo encima de la función
    while ($ini > 0 && preg_match('#^\s*//#', $lineas[$ini - 1])) {
        $ini--;
    }
    return rtrim(implode('', array_slice($lineas, $ini, $fin - $ini)));
}

/** Código del archivo principal del caso, tal como lo escribió el alumno. */
function codigoArchivo(array $caso): string
{
    return rtrim((string) file_get_contents(__DIR__ . '/../' . $caso['archivo']));
}

/** Funciones de lib/funciones.php que usa el caso. */
function codigoFunciones(array $caso): string
{
    $partes = array_map('fuenteFuncion', $caso['funciones']);
    return "<?php\n// lib/funciones.php\n\n" . implode("\n\n", $partes);
}
