<?php /** Variables esperadas: $tituloPagina */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e(($tituloPagina ?? 'Inicio') . ' | ' . APP_NOMBRE) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism-themes/1.9.0/prism-vsc-dark-plus.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.css" rel="stylesheet">
    <style>
        body { background: #e8edf4; }
        .panel-titulo { background: #a9b6c9; font-weight: 700; letter-spacing: .3px; }
        .caja-enunciado { background: #dbe3ee; border: 1px solid #8fa0b8; border-radius: 12px; padding: .6rem .9rem; }
        .btn-nav { background: #4a6785; color: #fff; border-radius: 999px; padding: .5rem 1.2rem; }
        .btn-nav:hover { background: #3a536c; color: #fff; }
        .btn-nav.disabled { opacity: .45; }
        .vscode-box { background: #1e1e1e; border-radius: 0 0 .5rem .5rem; }
        .vscode-box pre[class*="language-"] { margin: 0; max-height: 560px; overflow: auto; background: #1e1e1e; font-size: .85rem; }
        .caja-app { min-height: 380px; background: #fff; border: 1px solid #6b7c93; border-radius: 16px; }
        .circulo-nav { display: inline-flex; align-items: center; justify-content: center; width: 26px; height: 26px; border-radius: 50%; background: #fff; color: #4a6785; font-weight: 700; margin: 0 .4rem; }
        .visor-app { width: 100%; height: 560px; border: 0; border-radius: 0 0 .5rem .5rem; background: #f8f9fa; }
        .vscode-tabs { background: #252526; border-radius: .5rem .5rem 0 0; flex-wrap: nowrap; overflow-x: auto; }
        .vscode-tabs .nav-link { color: #ccc; font-family: Consolas, monospace; font-size: .8rem; border-radius: 0; padding: .45rem .9rem; }
        .vscode-tabs .nav-link.active { background: #1e1e1e; color: #fff; }
        .vscode-tabs .dot { display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 4px; }
        .vscode-tab { background: #252526; color: #ccc; font-family: Consolas, monospace; font-size: .8rem; padding: .4rem .9rem; border-radius: .5rem .5rem 0 0; }
        .vscode-tab .dot { display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 4px; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php"><?= e(APP_NOMBRE) ?></a>
    </div>
</nav>
<main class="container pb-4">
