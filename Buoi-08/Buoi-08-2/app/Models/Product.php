<?php

class Product
{
    public $connection;

    public function __construct()
    {
        $this->connection = connectDB();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM san_phams";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}