<?php
// Incluimos la librería de funciones
require_once("lib/funciones.php");

// Variables iniciales
$categoriaInput = "";
$codigoInput = "";
$codigoGenerado = "";

// Procesa el formulario al enviar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnGenerar'])) {
    $categoriaInput = $_POST['categoria'];
    $codigoInput = $_POST['codigoSecundario'];

    // Llamamos a la función
    if (function_exists('generarCodigoTicket')) {
        $codigoGenerado = generarCodigoTicket($categoriaInput, $codigoInput);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 07 - Código de Ticket</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 7: Código de Ticket</h3>

        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label for="categoria" class="form-label fw-bold">Categoría del Producto:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo htmlspecialchars($categoriaInput); ?>" placeholder="Ej.   tecnologia" required>
            </div>

            <div class="mb-3">
                <label for="codigoSecundario" class="form-label fw-bold">Código Secundario:</label>
                <input type="text" class="form-control" id="codigoSecundario" name="codigoSecundario" value="<?php echo htmlspecialchars($codigoInput); ?>" placeholder="Ej. 10045   " required>
            </div>

            <button type="submit" name="btnGenerar" class="btn btn-primary w-100 fw-bold">
                Generar Código Único
            </button>
        </form>

        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if (!empty($codigoGenerado)): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">Código Unificado Generado:</p>
                <div class="alert alert-success fs-4 fw-bold mb-0 rounded-3">
                    <?php echo $codigoGenerado; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
