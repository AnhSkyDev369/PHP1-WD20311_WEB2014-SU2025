<?php

class Author{
    public $conn;

    // Kết nối CSDL
    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }

    //  Hiên thị danh sách
    //  Hiển thị nhiều bản ghi 
    public function getAll() 
    {
        $sql = "SELECT * FROM authors";
    
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
}