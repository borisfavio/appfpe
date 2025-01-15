<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        echo "Lista de productos";
        // Aquí podrías incluir una vista o lógica adicional
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
