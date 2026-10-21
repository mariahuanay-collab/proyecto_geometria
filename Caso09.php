<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$radioInput = "";
$areaResultado = "";

// Procesa el formulario al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCalcular'])) {
    $radioInput = (float) $_POST['radio'];

    // Llamamos a la función de la librería
    if (function_exists('calcularAreaCirculo')) {
        $areaResultado = calcularAreaCirculo($radioInput);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 09 - Área de un Círculo</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 9: Área del Círculo</h3>

        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label for="radio" class="form-label fw-bold">Ingrese el Radio del Círculo (r):</label>
                <input type="number" step="any" min="0" class="form-control" id="radio" name="radio" value="<?php echo htmlspecialchars($radioInput); ?>" placeholder="Ej. 5" required>
            </div>

            <button type="submit" name="btnCalcular" class="btn btn-primary w-100 fw-bold">
                Calcular Área
            </button>
        </form>

        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if ($areaResultado !== ""): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">El Área del Círculo es:</p>
                <div class="alert alert-success fs-3 fw-bold mb-0 rounded-3">
                    <?php echo $areaResultado; ?> u²
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
