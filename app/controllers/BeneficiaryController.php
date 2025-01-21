<?php

namespace App\Controllers;

use App\Models\Beneficiary;

class BeneficiaryController
{
    private $beneficiary;

    public function __construct()
    {
        $this->beneficiary = new Beneficiary();
    }
    
    public function index()
    {
        $beneficiaries = $this->beneficiary->getAll();
        include __DIR__ . '/../views/beneficiaries/index.php';
    }

    public function create()
    {
        echo "Formulario de creación de producto";
    }

    public function store()
    {
        // Lógica para guardar el producto en la base de datos
    }
    
    public function edit($id)
    {
        $beneficiaryModel = new Beneficiary();
        $beneficiary = $beneficiaryModel->getById($id);
        include __DIR__ . '/../views/beneficiaries/edit.php';
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productModel = new Product();
            $productModel->update($id, $_POST);
            header('Location: /product/index');
        }
    }
}
