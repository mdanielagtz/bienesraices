<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', '1704','bienesraices_crud');

    if(!$db){
        echo "Error, no se pudo conectar";
        exit;
    }

    return $db;
}