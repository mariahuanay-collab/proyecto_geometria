</main>
<?php $al = alumno(); ?>
<footer class="bg-dark text-light-emphasis py-3 mt-4">
    <div class="container small text-center text-secondary">
        <?= e($al['nombre']) ?>
        <?= $al['semestre'] !== '' ? ' &middot; Semestre: ' . e($al['semestre']) : '' ?>
        <?= $al['turno'] !== '' ? ' &middot; Turno: ' . e($al['turno']) : '' ?>
        &middot; IESTP Misioneros Monfortianos
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup-templating.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
</body>
</html>
