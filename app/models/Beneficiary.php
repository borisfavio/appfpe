<?php

namespace App\Models;

use App\Core\Database;

class Beneficiary
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM beneficiarios");
        return $query->fetchAll();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO products (name, price, stock) VALUES (:name, :price, :stock)");
        $stmt->execute([
            'name' => $data['name'],
            'price' => $data['price'],
            'stock' => $data['stock'],
        ]);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("CALL ObtenerDatosBeneficiario(:id)");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE products SET name = :name, price = :price, stock = :stock WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'name' => $data['name'],
            'price' => $data['price'],
            'stock' => $data['stock'],
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
