<?php
class Instructor
{
    public $conn;
    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();   
    }
    public function getAll()
    {
        $sql = "SELECT * FROM instructor";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
}