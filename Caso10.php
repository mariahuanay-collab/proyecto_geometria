<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$catetoAInput = "";
$catetoBInput = "";
$hipotenusaResultado = "";

// Procesa el formulario al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCalcular'])) {
    $catetoAInput = (float) $_POST['catetoA'];
    $catetoBInput = (float) $_POST['catetoB'];

    // Llamamos a la función de la librería
    if (function_exists('calcularHipotenusa')) {
        $hipotenusaResultado = calcularHipotenusa($catetoAInput, $catetoBInput);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 10 - Cálculo de Hipotenusa</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 500px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 10: Teorema de Pitágoras</h3>

        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">

            <div class="mb-3">
                <label for="catetoA" class="form-label fw-bold">Ingrese Cateto A (a):</label>
                <input type="number" step="any" min="0" class="form-control" id="catetoA" name="catetoA" value="<?php echo htmlspecialchars($catetoAInput); ?>" placeholder="Ej. 3" required>
            </div>

            <div class="mb-3">
                <label for="catetoB" class="form-label fw-bold">Ingrese Cateto B (b):</label>
                <input type="number" step="any" min="0" class="form-control" id="catetoB" name="catetoB" value="<?php echo htmlspecialchars($catetoBInput); ?>" placeholder="Ej. 4" required>
            </div>

            <button type="submit" name="btnCalcular" class="btn btn-primary w-100 fw-bold py-2">
                Calcular Hipotenusa
            </button>
        </form>

        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if ($hipotenusaResultado !== ""): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">La Hipotenusa (h) es:</p>
                <div class="alert alert-success fs-3 fw-bold mb-0 rounded-3">
                    <?php echo $hipotenusaResultado; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
