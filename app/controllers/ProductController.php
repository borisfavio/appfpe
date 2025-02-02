<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index()
    {
        $products = $this->product->getAll();
        include __DIR__ . '/../views/product/index.php';
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
