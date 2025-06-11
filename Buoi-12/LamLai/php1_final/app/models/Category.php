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
        //  Khai báo câu truy vấn
        $sql = "SELECT * FROM danh_mucs";
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
       "SELECT * FROM danh_mucs
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