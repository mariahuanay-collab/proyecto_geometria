<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$montoInput = "";
$igvResultado = "";
$totalResultado = "";

// Procesa el formulario al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCalcular'])) {
    $montoInput = (float) $_POST['monto'];

    // Llamamos a la función de la librería
    $igvResultado = calcularIgv($montoInput);
    $totalResultado = $montoInput + $igvResultado;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 06 - Cálculo de IGV</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 6: Cálculo Financiero (IGV 18%)</h3>
        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label for="monto" class="form-label fw-bold">Monto (subtotal en S/):</label>
                <input type="number" step="any" min="0" class="form-control" id="monto" name="monto" value="<?php echo htmlspecialchars($montoInput); ?>" placeholder="Ej. 250" required>
            </div>
            <button type="submit" name="btnCalcular" class="btn btn-primary w-100 fw-bold">
                Calcular IGV y Total
            </button>
        </form>
        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if ($igvResultado !== ""): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">Resumen de la operación:</p>
                <div class="alert alert-success fs-4 fw-bold mb-0 rounded-3">
                    Subtotal: S/ <?php echo number_format($montoInput, 2); ?><br>
                    IGV (18%): S/ <?php echo number_format($igvResultado, 2); ?><br>
                    Total: S/ <?php echo number_format($totalResultado, 2); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
