<?php
// Página 2: código fuente (estilo VS Code) + aplicación del caso con su diseño
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

$tituloPagina = $caso['etiqueta'] . ': ' . $caso['titulo'];
$conFunciones = !empty($caso['funciones']);
include_once __DIR__ . '/includes/header.php';
?>
<div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
    <h1 class="h3 fw-bold mb-0"><?= e($caso['etiqueta']) ?>: <?= e($caso['titulo']) ?></h1>
    <a class="btn btn-nav" href="index.php">&#8630; VOLVER Pág. PRINCIPAL</a>
</div>

<div class="caja-enunciado mb-4"><strong>ENUNCIADO:</strong><br><?= e($caso['enunciado']) ?></div>

<div class="row g-4">
    <div class="col-lg-7">
        <div class="card shadow-sm h-100">
            <div class="card-header panel-titulo">VISUALIZACIÓN DE CÓDIGOS (PHP)</div>
            <div class="card-body p-0">
                <ul class="nav vscode-tabs" role="tablist">
                    <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-archivo" type="button"><span class="dot" style="background:#ff5f56"></span><span class="dot" style="background:#ffbd2e"></span><span class="dot" style="background:#27c93f"></span> <?= e($caso['archivo']) ?></button></li>
                    <?php if ($conFunciones): ?>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-funciones" type="button">lib/funciones.php</button></li>
                    <?php endif; ?>
                </ul>
                <div class="tab-content vscode-box">
                    <div class="tab-pane fade show active" id="tab-archivo">
<pre class="line-numbers"><code class="language-php"><?= e(codigoArchivo($caso)) ?></code></pre>
                    </div>
                    <?php if ($conFunciones): ?>
                        <div class="tab-pane fade" id="tab-funciones">
<pre class="line-numbers"><code class="language-php"><?= e(codigoFunciones($caso)) ?></code></pre>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card shadow-sm h-100">
            <div class="card-header panel-titulo">ÁREA DE RESULTADOS</div>
            <div class="card-body p-0">
                <iframe class="visor-app" src="<?= e($caso['archivo']) ?>" title="<?= e($caso['titulo']) ?>"></iframe>
            </div>
            <div class="card-footer bg-transparent border-0 d-grid">
                <a class="btn btn-nav" href="app_caso.php?id=<?= e($caso['id']) ?>">ACCEDER A LA APLICACIÓN (PÁG. 3)</a>
            </div>
        </div>
    </div>
</div>

<?= panelNavegacion($caso['id']) ?>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
