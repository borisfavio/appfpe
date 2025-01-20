<?php

namespace App\Controllers;


class AppController
{
    
    
    public function index()
    {
        include __DIR__ . '/../views/main/index.php';
    }

    public function create()
    {
        echo "Formulario de creación de producto";
    }

    public function store()
    {
        // Lógica para guardar el producto en la base de datos
    }
}
