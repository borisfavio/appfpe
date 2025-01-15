<?php

namespace app\models;

use app\core\Database;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        return $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO products (name, quantity, price) VALUES (:name, :quantity, :price)";
        $this->db->query($sql, $data);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE products SET name = :name, quantity = :quantity, price = :price WHERE id = :id";
        $data['id'] = $id;
        $this->db->query($sql, $data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $this->db->query($sql, ['id' => $id]);
    }
    
    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        return $this->db->query($sql, ['id' => $id])->fetch(\PDO::FETCH_ASSOC);
    }

}
