<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost';
    private $dbName = 'fundacion_db';
    private $username = 'root'; // O 'root' si no creaste un usuario
    private $password = ''; // Cambia esto por tu contraseña
    private $charset = 'utf8mb4';
    private $pdo;

    public function connect()
    {
        if ($this->pdo === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset={$this->charset}";
                $this->pdo = new PDO($dsn, $this->username, $this->password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            } catch (PDOException $e) {
                die('Error de conexión: ' . $e->getMessage());
            }
        }
        return $this->pdo;
    }
}
