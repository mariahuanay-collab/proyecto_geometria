<?php
// Página 3: enlace para ver la ejecución de la aplicación
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/lib/casos.php';

$id   = (string) ($_GET['id'] ?? '');
$caso = obtenerCaso($id);

if ($caso === null) {
    http_response_code(404);
    $tituloPagina = 'Caso no encontrado';
    include_once __DIR__ . '/includes/header.php';
    echo '<div class="alert alert-danger">El caso solicitado no existe. <a href="index.php">Volver al menú principal</a></div>';
    include_once __DIR__ . '/includes/footer.php';
    exit;
}

$tituloPagina = 'Aplicación - ' . $caso['etiqueta'];
include_once __DIR__ . '/includes/header.php';
?>
<div class="caja-app d-flex align-items-center justify-content-center mb-4">
    <div class="caja-enunciado text-center px-4 py-3">
        <p class="mb-2 fw-bold"><?= e($caso['etiqueta']) ?>: <?= e($caso['titulo']) ?></p>
        <a class="link-dark fw-semibold" href="<?= e($caso['archivo']) ?>" target="_blank" rel="noopener">
            Ver la ejecución de la aplicación (<?= e($caso['archivo']) ?>)
        </a>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6 d-grid">
        <a class="btn btn-nav text-start" href="caso.php?id=<?= e($caso['id']) ?>"><span class="circulo-nav">&lsaquo;</span> LINK VOLVER A LA PÁG. ANTERIOR (<?= e($caso['etiqueta']) ?>)</a>
    </div>
    <div class="col-md-6 d-grid">
        <a class="btn btn-nav text-end" href="index.php">LINK IR A LA PÁGINA PRINCIPAL (MENÚ) <span class="circulo-nav">&rsaquo;</span></a>
    </div>
</div>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
