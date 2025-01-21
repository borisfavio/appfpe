<?php

namespace App\Controllers;

use App\Models\Group;

class GroupController
{
    private $group;

    public function __construct()
    {
        $this->group = new Group();
    }
    
    public function index()
    {
        $groups = $this->group->getAll();
        include __DIR__ . '/../views/group/index.php';
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
