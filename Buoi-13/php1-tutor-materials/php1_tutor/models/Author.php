<?php
class Author
{
    public $conn;

    // Kết nối CSDL
    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }

    // Hiển thị danh sách
    public function getAll()
    {
        $sql = "SELECT * FROM authors";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(); // Hiển thị nhiều bản ghi
    }
}