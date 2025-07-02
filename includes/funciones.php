<?php

if (!defined('TEMPLATES_URL')) {
    define('TEMPLATES_URL', __DIR__ . '/templates');
}

if (!defined('FUNCIONES_URL')) {
    define('FUNCIONES_URL', __DIR__ . '/funciones.php');
}

if (!function_exists('incluirTemplate')) {
    function incluirTemplate(string $nombre, bool $inicio = false) {
        include TEMPLATES_URL . "/{$nombre}.php";
    }
}

if (!function_exists('estaAutenticado')) {
    function estaAutenticado(): bool {
        session_start();
        $auth = $_SESSION['login'];
        return $auth ? true : false;
    }
}
