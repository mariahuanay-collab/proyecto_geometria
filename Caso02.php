<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$num1Input = "";
$num2Input = "";
$productoResultado = "";

// Procesa el formulario al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCalcular'])) {
    $num1Input = (int) $_POST['numero1'];
    $num2Input = (int) $_POST['numero2'];

    // Llamamos a la función de la librería
    $productoResultado = producto($num1Input, $num2Input);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 02 - Producto de dos Números</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 2: Producto de dos Números</h3>
        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label for="numero1" class="form-label fw-bold">Primer valor entero:</label>
                <input type="number" step="1" class="form-control" id="numero1" name="numero1" value="<?php echo htmlspecialchars($num1Input); ?>" placeholder="Ej. 6" required>
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label fw-bold">Segundo valor entero:</label>
                <input type="number" step="1" class="form-control" id="numero2" name="numero2" value="<?php echo htmlspecialchars($num2Input); ?>" placeholder="Ej. 4" required>
            </div>
            <button type="submit" name="btnCalcular" class="btn btn-primary w-100 fw-bold">
                Calcular Producto
            </button>
        </form>
        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if ($productoResultado !== ""): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">El producto de <?php echo $num1Input; ?> x <?php echo $num2Input; ?> es:</p>
                <div class="alert alert-success fs-4 fw-bold mb-0 rounded-3">
                    <?php echo $productoResultado; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
