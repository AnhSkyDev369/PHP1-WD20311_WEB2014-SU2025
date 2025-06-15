<?php

class Role
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM roles";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    
}