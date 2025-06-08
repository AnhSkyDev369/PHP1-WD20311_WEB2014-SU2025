<?php

class Product
{
    //  Bước 4
    public $connection;
    //  Kết nối với CSDL
    public function __construct()
    {
        $this->connection = connectDB();
    }

    //  Truy vấn hiển thị danh sách sản phẩm
    public function getAll()
    {
        //  Khai báo câu truy vấn
        // $sql = "SELECT * FROM san_phams";
         $sql = "SELECT p.*, c.ten_danh_muc AS ten_danh_muc
                FROM san_phams p
                INNER JOIN danh_mucs c ON c.id = p.danh_muc_id";
        //  Chuẩn bị dữ liệu truy vấn
        $stmt = $this->connection->prepare($sql);
        //  Thực hiện truy vấn
        $stmt->execute();
        //  Trả về, lấy dữ liệu truy vấn
        return $stmt->fetchAll();
    }

    //  Truy vấn hiển thị chi tiết sản phẩm
    public function find($id)
    {
        $sql = "SELECT p.*, c.ten_danh_muc AS ten_danh_muc
                FROM san_phams p
                INNER JOIN danh_mucs c ON c.id = p.danh_muc_id 
                WHERE p.id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam('id', $id);//  Gán giá trị vào key id ở câu truy vấn
        $stmt->execute();
        return $stmt->fetch();
    }
}