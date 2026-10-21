<?php
// Incluimos la librería de funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$horasMultizona = null;

// Procesa el formulario al presionar el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnConsultar'])) {
    if (function_exists('obtenerHorasMultizona')) {
        $horasMultizona = obtenerHorasMultizona();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 12 - Reloj Multizona Horaria</title>
    <!-- CDN Básico de Bootstrap 5 CSS e Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 550px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 12: Reloj Multizona Horaria</h3>

        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <p class="text-muted text-center mb-3 small">
                Consulta la fecha y hora en tiempo real para distintas zonas horarias.
            </p>

            <button type="submit" name="btnConsultar" class="btn btn-primary w-100 fw-bold py-2">
                <i class="bi bi-globe me-2"></i>Consultar Horario Internacional
            </button>
        </form>

        <!-- Muestra los resultados únicamente al presionar el botón -->
        <?php if ($horasMultizona !== null): ?>
            <div class="mt-4">
                <?php foreach ($horasMultizona as $info): ?>
                    <div class="card mb-3 p-3 shadow-sm border-0 rounded-4 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-2 border-bottom pb-2">
                            <h5 class="fw-bold text-primary mb-0">
                                <i class="bi bi-geo-alt-fill me-1"></i><?php echo $info['ciudad']; ?>
                            </h5>
                            <span class="badge bg-secondary"><?php echo $info['zona']; ?></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted d-block">Fecha:</small>
                                <span class="fw-bold text-dark"><?php echo $info['fecha']; ?></span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block">Hora:</small>
                                <span class="fs-5 fw-bold text-success"><?php echo $info['hora']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
