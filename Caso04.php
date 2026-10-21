<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$nota = null;
$mensajeNota = "";

// Procesa el formulario al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnGenerar'])) {
    // Generamos una nota aleatoria entre 0 y 20
    $nota = rand(0, 20);

    // Llamamos a la función de la librería
    $mensajeNota = evaluarNota($nota);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 04 - Evaluación de Nota</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 4: Nota Aleatoria (0 a 20)</h3>
        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <p class="text-muted text-center mb-3 small">
                Se generará una nota aleatoria entre 0 y 20.
            </p>
            <button type="submit" name="btnGenerar" class="btn btn-primary w-100 fw-bold">
                Generar Nota Aleatoria
            </button>
        </form>
        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if ($nota !== null): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">Nota generada: <strong><?php echo $nota; ?></strong></p>
                <div class="alert alert-<?php echo ($nota !== null && $nota >= 13) ? 'success' : 'danger'; ?> fs-4 fw-bold mb-0 rounded-3">
                    <?php echo $mensajeNota; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
