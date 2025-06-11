<?php

class Category
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }

    public function getAll()
    {
        $sql  = "SELECT * FROM danh_mucs";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $sql  = "SELECT * FROM danh_mucs WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}
