<?php
// Variables globales, zona horaria y utilidades comunes
date_default_timezone_set('America/Lima');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

const APP_NOMBRE = 'Casos Prácticos - Programación Web';

// Datos por defecto del alumno (se pueden cambiar desde el Menú Principal)
const ALUMNO_DEFECTO = [
    'nombre'   => 'Huanay Estrada María Lourdes',
    'semestre' => '',
    'turno'    => '',
];

/** Escapa texto para imprimirlo de forma segura en HTML. */
function e(mixed $texto): string
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}

/** Datos del alumno guardados en sesión (o los de por defecto). */
function alumno(): array
{
    return array_merge(ALUMNO_DEFECTO, $_SESSION['alumno'] ?? []);
}
