<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$infoFechaHora = null;

// Procesa la solicitud al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnObtenerInfo'])) {
    if (function_exists('obtenerFechaYHora')) {
        $infoFechaHora = obtenerFechaYHora();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 11 - Marca de Tiempo y Fecha</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 500px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 11: Fecha y Hora Completa</h3>

        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <p class="text-muted text-center mb-3 small">
                Zona horaria configurada: <strong>America/Lima</strong>
            </p>

            <button type="submit" name="btnObtenerInfo" class="btn btn-primary w-100 fw-bold py-2">
                <i class="bi bi-clock-history me-2"></i>Generar Marca de Tiempo
            </button>
        </form>

        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if ($infoFechaHora !== null): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white">
                <h5 class="fw-bold text-center text-primary mb-3">Información Generada:</h5>

                <div class="mb-3 p-3 bg-light rounded-3">
                    <small class="text-muted d-block fw-semibold">Segundos desde 01/01/1970 (time):</small>
                    <span class="fs-5 fw-bold text-dark"><?php echo $infoFechaHora['segundos']; ?> s</span>
                </div>

                <div class="mb-3 p-3 bg-light rounded-3">
                    <small class="text-muted d-block fw-semibold">Fecha Actual (d/m/Y):</small>
                    <span class="fs-5 fw-bold text-success"><?php echo $infoFechaHora['fecha']; ?></span>
                </div>

                <div class="p-3 bg-light rounded-3">
                    <small class="text-muted d-block fw-semibold">Hora Actual (h:i:s A):</small>
                    <span class="fs-5 fw-bold text-primary"><?php echo $infoFechaHora['hora']; ?></span>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
