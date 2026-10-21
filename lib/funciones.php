<?php
// --- DECLARACIÓN DE FUNCIONES ---

function mensaje(){
    // Comentario
    echo "Bienvenidos a PHP";
}

function pon_tu_nombre($nombre){
    echo $nombre;
}

function con_parametros($var1, $var2, $var3) {
    $suma = $var1 + $var2 + $var3;
    echo "La suma de los tres numeros es: " . $suma . "<br/>";
}

function promedio($nt, $nee, $proy){
    $prom = ($nt + $nee + $proy) / 3;
    return $prom;
}

function saludo(string $saludo): string
{
    return $saludo;
}

function separa() {
    echo "<hr/>";
}

function suma(float $n1, float $n2): float
{
    $s = $n1 + $n2;
    return $s;
}

// 1. Calcular el cuadrado de un número
function calcularCuadrado(int $n1): int {
    $cuadrado = $n1 * $n1;
    return $cuadrado;
}

// 2. Calcular el producto de dos números
function producto(int $n1, int $n2): int {
    $producto = $n1 * $n2;
    return $producto;
}

// 3. Saludo por nombre
function Nombre($nombre) {
    return "Hola, " . htmlspecialchars($nombre) . ". Bienvenido.";
}

// 4. Evaluación de nota
function evaluarNota($nota) {
    if ($nota >= 13) {
        return "Felicitaciones";
    } else {
        return "Inténtalo en otra oportunidad!!!";
    }
}

// 5. Suma de dos números enteros
function sumarNumeros($numero1, $numero2) {
    return $numero1 + $numero2;
}

// 6. Módulo de Cálculo Financiero (IGV)
function calcularIgv(float $monto): float {
    return $monto * 0.18;
}
// 7. Generador de Código de Ticket
function generarCodigoTicket($categoria, $codigoSecundario) {
    // 1. Limpiamos espacios a la izquierda de la categoría
    $categoriaLimpia = ltrim($categoria);

    // 2. Convertimos la categoría a mayúsculas
    $categoriaMayus = strtoupper($categoriaLimpia);

    // 3. Limpiamos espacios a la derecha del código secundario
    $codigoLimpio = rtrim($codigoSecundario);

    // Unificamos para crear el código único
    return $categoriaMayus . "-" . $codigoLimpio;
}

// 8. Normalización de Nombres Propios
function normalizarNombre($nombreCompleto) {
    // 1. Elimina espacios al inicio y al final
    $nombreLimpio = trim($nombreCompleto);

    // 2. Convierte todo el texto a minúsculas
    $nombreMinusculas = strtolower($nombreLimpio);

    // 3. Capitaliza la primera letra de cada palabra
    $nombreNormalizado = ucwords($nombreMinusculas);

    return $nombreNormalizado;
}
// 9. Cálculo del Área de un Círculo
function calcularAreaCirculo($radio) {
    // Área = π * r²
    $area = pi() * pow($radio, 2);

    // Retornamos el área formateada a 2 decimales
    return number_format($area, 2);
}
// Caso 10: Teorema de Pitágoras (Hipotenusa)
function calcularHipotenusa($catetoA, $catetoB) {
    $hipotenusa = sqrt(pow($catetoA, 2) + pow($catetoB, 2));
    return number_format($hipotenusa, 2);
}
// 11. Generador de Marca de Tiempo y Fecha Completa
function obtenerFechaYHora(): array {
    // Configura la zona horaria a America/Lima
    date_default_timezone_set('America/Lima');

    // Obtiene los datos de fecha y hora
    $segundos = time();
    $fechaActual = date('d/m/Y');
    $horaActual = date('h:i:s A');

    // Devuelve un arreglo con la información
    return [
        'segundos' => $segundos,
        'fecha'    => $fechaActual,
        'hora'     => $horaActual,
    ];
}
// 12. Reloj Multizona Horaria (Lima, Nueva York, Madrid)
function obtenerHorasMultizona(): array {
    // Creación de objetos DateTime con sus respectivas zonas horarias
    $lima = new DateTime('now', new DateTimeZone('America/Lima'));
    $nuevaYork = new DateTime('now', new DateTimeZone('America/New_York'));
    $madrid = new DateTime('now', new DateTimeZone('Europe/Madrid'));

    // Devuelve un arreglo con la información de cada ciudad
    return [
        [
            'ciudad' => 'Lima (Perú)',
            'zona'   => 'America/Lima',
            'fecha'  => $lima->format('d/m/Y'),
            'hora'   => $lima->format('h:i:s A'),
        ],
        [
            'ciudad' => 'Nueva York (EE. UU.)',
            'zona'   => 'America/New_York',
            'fecha'  => $nuevaYork->format('d/m/Y'),
            'hora'   => $nuevaYork->format('h:i:s A'),
        ],
        [
            'ciudad' => 'Madrid (España)',
            'zona'   => 'Europe/Madrid',
            'fecha'  => $madrid->format('d/m/Y'),
            'hora'   => $madrid->format('h:i:s A'),
        ],
    ];
}
?>
