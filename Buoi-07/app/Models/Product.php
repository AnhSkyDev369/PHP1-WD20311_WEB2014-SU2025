<?php

class Product
{
    //  Tên file là gì thì tên class đặt như thế
    public $connection;

    public function __construct()
    {
        //  Kết nối với CSDL để model thực hiện các công việc truy vấn
        $this->connection = connectDB();
    }

    //  Hàm truy xuất dữ liệu danh sách sản phẩm
    public function getAllProduct()
    {
        //  Khai báo câu truy vấn
        $sql = "SELECT * FROM san_phams";

        //  Truyền câu truy vấn để chuẩn bị truy vấn dữ liệu
        //  Hàm prepare(): chuẩn bị truy vấn
        $stmt = $this->connection->prepare($sql);
        
        //  Thực hiện truy vấn
        $stmt->execute();
        
        //  fetchAll dùng để trả ra nhiều dữ liệu
        //  fetch dùng để trả ra 1 dữ liệu (thực hiện trong công việc xem chi tiết)
        return $stmt->fetchAll();

    }
}
