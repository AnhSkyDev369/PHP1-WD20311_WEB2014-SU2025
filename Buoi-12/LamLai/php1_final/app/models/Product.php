<?php

class Product
{
    public $connection;

    public function __construct()
    {
        $this->connection = connectDB();
    }

    public function getAllProduct()
    {
        //  Khai báo câu truy vấn
        $sql = "SELECT p.*, c.ten_danh_muc AS ten_danh_muc 
        FROM san_phams p INNER JOIN danh_mucs c
        ON c.id = p.danh_muc_id";
        //  Chuẩn bị dư liệu truy vấn
        $stmt = $this->connection->prepare($sql);
        //  Thực hiện câu truy vấn
        $stmt->execute();
        //  Lấy toàn bộ dữ liệu từ truy vấn
        return $stmt->fetchAll();    
    }

    public function findByID($id)
    {
        //  Khai báo câu truy vấn
        $sql = 
       "SELECT p.*, c.ten_danh_muc AS ten_danh_muc 
        FROM san_phams p INNER JOIN danh_mucs c
        ON c.id = p.danh_muc_id
        WHERE p.id = :id";
        //  Chuẩn bị câu truy vấn
        $stmt = $this->connection->prepare($sql);
        //  Gán giá trị vào key id ở câu truy vấn
        $stmt->bindParam('id', $id);
        //  Thực hiện câu truy vấn
        $stmt->execute();
        //  Lấy 1 dữ liệu được trả về sau khi truy vấn thành công
        return $stmt->fetch();
    }

}