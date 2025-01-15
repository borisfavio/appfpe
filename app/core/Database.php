<?php

namespace app\core;

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost'; // Cambia por tu host
    private $dbname = 'nombre_de_tu_base'; // Cambia por el nombre de tu base de datos
    private $user = 'postgres'; // Cambia por tu usuario
    private $password = 'tu_contraseña'; // Cambia por tu contraseña
    private $connection;

    public function __construct()
    {
        try {
            $dsn = "pgsql:host={$this->host};dbname={$this->dbname}";
            $this->connection = new PDO($dsn, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar con la base de datos: " . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
}
