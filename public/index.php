<?php

require_once __DIR__ . '/../app/core/autoload.php';

use app\controllers\ProductController;

// Prueba si la clase se encuentra correctamente
if (class_exists('app\controllers\ProductController')) {
    echo "La clase ProductController se encontró correctamente.";
} else {
    echo "Error: La clase ProductController no se encontró.";
}
