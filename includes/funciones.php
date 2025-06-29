<?php

require 'app.php';

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
