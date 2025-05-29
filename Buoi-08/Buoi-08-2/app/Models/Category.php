<?php

class Category
{
    public $connection;

    public function __construct()
    {
        $this->connection = connectDB();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM danh_mucs";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}