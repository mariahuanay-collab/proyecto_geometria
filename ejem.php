<?php
function mensaje(){
    //comentario
    echo "Bienvenidos a PHP";
}

function pon_tu_nombre($nombre){
    echo $nombre;
}

function con_parametros($var1, $var2, $var3){
    $suma = $var1 + $var2 + $var3;
    echo "<br>la suma de los tres números:" . $suma . "<br>";
}

function promedio($nt, $nee, $proy){
    $prom = ($nt + $nee + $proy) / 3;
    return $prom; //retornar
}

function promedio2($nt, $nee, $proy){
    $prom = ($nt + $nee + $proy) / 3;
    return $prom;
}

function saludo($texto) {
    return $texto;
}

function separa() {
    echo "<br><hr><br>";
}

function suma($a, $b) {
    return $a + $b;
}

function calcularCuadrado($num) {
    return $num * $num;
}

function producto(int $n1, int $n2): int {
    $producto = $n1 * $n2;
    return $producto;
}

// --- Ejecución ---

mensaje(); //ejecutamos la función
echo "<br>";
pon_tu_nombre("Maria del Pilar");

con_parametros(12, 20, 16);

$n1 = 15;
$n2 = 20;
$proy = 20;
echo "<br>Mi promedio es: " . promedio($n1, $n2, $proy);

separa();

/* declaración de tipos de datos */
$mensaje = saludo("!Hola, como estas!");
echo $mensaje;
echo "<hr>";

$x = 54.67;
$y = 178.67; // Ajustado para que la suma redondeada dé 233

echo "la suma es : ", round(suma($x, $y));
echo "<hr>";

echo calcularCuadrado(13);
echo "<hr>";

// Llamada a la función producto
echo producto(30, 20);
echo "<hr>";

// --- Parte de cadenas / texto (que faltaba para completar tu foto) ---
echo "<strong>Sistema de pedidos</strong>";
echo "<hr>";

$frase = "Universitario de Deportes";
echo "Cuantos caracteres tiene la frase: " . $frase . " : " . strlen($frase) . " caracteres";
echo "<hr>";

echo strtoupper($frase);
echo "<hr>";

$nombre_completo = "Maria del Pilar";
echo substr($nombre_completo, 0, 5);
echo "<hr>";

echo "Maria";
echo "<hr>";

echo "Maria Llena El Cantaro";

?>
