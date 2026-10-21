<?php
// Página 1: Menú Principal (Hub / Dashboard)
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/lib/casos.php';

// Guardar datos del alumno (patrón Post/Redirect/Get)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar_alumno'])) {
    $_SESSION['alumno'] = [
        'nombre'   => mb_substr(trim((string) ($_POST['nombre'] ?? '')), 0, 120),
        'semestre' => mb_substr(trim((string) ($_POST['semestre'] ?? '')), 0, 30),
        'turno'    => mb_substr(trim((string) ($_POST['turno'] ?? '')), 0, 30),
    ];
    header('Location: index.php');
    exit;
}

// Agrupar casos por categoría (conservando el orden)
$porCategoria = [];
foreach (todosLosCasos() as $id => $caso) {
    $porCategoria[$caso['categoria']][] = ['id' => (string) $id] + $caso;
}
$al = alumno();

$tituloPagina = 'Menú Principal';
include_once __DIR__ . '/includes/header.php';
?>
<h1 class="text-center fw-bold mb-4">MENÚ PRINCIPAL</h1>

<?php foreach ($porCategoria as $categoria => $lista): ?>
    <div class="card mb-4 shadow-sm">
        <div class="card-header panel-titulo text-uppercase"><?= e($categoria) ?></div>
        <div class="card-body">
            <?php foreach ($lista as $i => $c): ?>
                <div class="<?= $i < count($lista) - 1 ? 'mb-4' : '' ?>">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-2">
                        <h2 class="h6 fw-bold mb-0"><?= e($c['etiqueta']) ?>: <?= e($c['titulo']) ?></h2>
                        <a class="btn btn-nav btn-sm" href="caso.php?id=<?= e($c['id']) ?>">Ver caso &rarr;</a>
                    </div>
                    <div class="caja-enunciado small"><strong>Enunciado detallado:</strong> <?= e($c['enunciado']) ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>

<form method="post" class="card shadow-sm">
    <div class="card-body row g-3 align-items-end">
        <div class="col-md-6">
            <label class="form-label fw-bold" for="nombre">APELLIDOS Y NOMBRES:</label>
            <input class="form-control" id="nombre" name="nombre" value="<?= e($al['nombre']) ?>" placeholder="Apellidos y nombres">
        </div>
        <div class="col-md-2">
            <label class="form-label fw-bold" for="semestre">SEMESTRE:</label>
            <input class="form-control" id="semestre" name="semestre" value="<?= e($al['semestre']) ?>" placeholder="IV">
        </div>
        <div class="col-md-2">
            <label class="form-label fw-bold" for="turno">TURNO:</label>
            <input class="form-control" id="turno" name="turno" value="<?= e($al['turno']) ?>" placeholder="Tarde">
        </div>
        <div class="col-md-2 d-grid">
            <button class="btn btn-nav" type="submit" name="guardar_alumno" value="1">Guardar</button>
        </div>
    </div>
</form>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
