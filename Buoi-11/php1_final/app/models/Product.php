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
        $sql = "SELECT * FROM san_phams";
        //  Chuẩn bị dữ liệu truy vấn
        $stmt = $this->connection->prepare($sql);
        //  Thực hiện truy vấn
        $stmt->execute();
        //  Trả về, lấy dữ liệu truy vấn
        return $stmt->fetchAll();
    }
}