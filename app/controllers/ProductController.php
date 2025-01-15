<?php

namespace app\controllers;

use app\models\Product;

class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index()
    {
        $products = $this->model->getAll();
        require __DIR__ . '/../views/product/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'quantity' => $_POST['quantity'],
                'price' => $_POST['price']
            ];
            $this->model->create($data);
            header('Location: /');
        }
        require __DIR__ . '/../views/product/create.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'quantity' => $_POST['quantity'],
                'price' => $_POST['price']
            ];
            $this->model->update($id, $data);
            header('Location: /');
        }
        $product = $this->model->getById($id);
        require __DIR__ . '/../views/product/edit.php';
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /');
    }

    public function generateReport()
    {
        $products = $this->model->getAll();

        // Incluye la biblioteca FPDF
        require_once __DIR__ . '/../../vendor/fpdf/fpdf.php';

        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Reporte de Productos', 0, 1, 'C');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(30, 10, 'ID', 1);
        $pdf->Cell(70, 10, 'Nombre', 1);
        $pdf->Cell(30, 10, 'Cantidad', 1);
        $pdf->Cell(30, 10, 'Precio', 1);
        $pdf->Ln();

        foreach ($products as $product) {
            $pdf->Cell(30, 10, $product['id'], 1);
            $pdf->Cell(70, 10, $product['name'], 1);
            $pdf->Cell(30, 10, $product['quantity'], 1);
            $pdf->Cell(30, 10, $product['price'], 1);
            $pdf->Ln();
        }

        $pdf->Output('D', 'reporte_productos.pdf');
    }
}
