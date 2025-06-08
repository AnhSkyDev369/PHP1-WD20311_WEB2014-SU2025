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
        $sql = "SELECT *  FROM danh_mucs";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();   
    }

    public function find($id)
    {
        $sql = "SELECT * FROM danh_mucs WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}