<?php

class CategoryModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();    
    }

    public function find($id)
    {
        $sql = "SELECT * FROM categories WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    //  CRUD

    //  Create
    public function create($name)
    {
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $name);
        return $stmt->execute();
    }

    //  Update
    public function update($id, $name)
    {
        $sql = "UPDATE categories SET name = :name WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->bindParam('name', $name);
        return $stmt->execute();
    }

    //  Delete
    public function delete()
    {
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }
}