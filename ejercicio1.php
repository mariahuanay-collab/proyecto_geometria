<?php

include('lib/funciones.php');

mensaje(); // Ejecutamos la función
echo "<br/>";

pon_tu_nombre("Maria del Pilar");
echo "<br/>";

con_parametros(5, 10, 15);

// Guardamos el resultado del promedio y lo mostramos
$resultado_promedio = promedio(5, 10, 15);
echo "El promedio es: " . $resultado_promedio;

?>
