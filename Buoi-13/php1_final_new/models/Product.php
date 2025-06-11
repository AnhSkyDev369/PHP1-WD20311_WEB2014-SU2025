<?php
class Product 
{
    public $conn;

    // Kết nối với CSDL
    public function __construct()
    {
        // Lấy PDO từ BaseModel
        $this->conn = (new BaseModel())->getConnection();
    }

    // Truy vấn hiển thị danh sách sản phẩm
    public function getAll()
    {
        $sql = "SELECT p.*,  c.ten_danh_muc AS ten_danh_muc
                FROM san_phams p
                INNER JOIN danh_mucs c ON c.id = p.danh_muc_id";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll();
    }

    // Truy vấn hiển thị chi tiết sản phẩm
    public function find($id)
    {
        $sql = "SELECT p.*,  c.ten_danh_muc AS ten_danh_muc
                FROM san_phams p
                INNER JOIN danh_mucs c ON c.id = p.danh_muc_id
                WHERE p.id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id); // Gán giá trị vào key id ở câu truy vấn
        $stmt->execute();
        return $stmt->fetch();
    }
}