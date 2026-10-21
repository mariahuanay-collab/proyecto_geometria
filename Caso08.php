<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$nombreInput = "";
$nombreResultado = "";

// Procesa el formulario al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnNormalizar'])) {
    $nombreInput = $_POST['nombreCompleto'];

    // Llamamos a la función de la librería
    if (function_exists('normalizarNombre')) {
        $nombreResultado = normalizarNombre($nombreInput);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 08 - Normalización de Nombres</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 480px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 8: Normalizar Nombre</h3>

        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label for="nombreCompleto" class="form-label fw-bold">Ingrese Nombre Completo:</label>
                <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" value="<?php echo htmlspecialchars($nombreInput); ?>" placeholder="Ej.   mARiA dEL pILaR   " required>
            </div>

            <button type="submit" name="btnNormalizar" class="btn btn-primary w-100 fw-bold">
                Normalizar Nombre
            </button>
        </form>

        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if (!empty($nombreResultado)): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">Nombre Formateado Correctamente:</p>
                <div class="alert alert-success fs-4 fw-bold mb-0 rounded-3">
                    <?php echo $nombreResultado; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
