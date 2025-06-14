<?php

class Product
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel)->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT p.*, c.ten_danh_muc AS ten_danh_muc 
                FROM san_phams p INNER JOIN danh_mucs c
                ON c.id = p.danh_muc_id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $sql = "SELECT p.*, c.ten_danh_muc AS ten_danh_muc 
                FROM san_phams p INNER JOIN danh_mucs c
                ON c.id = p.danh_muc_id
                WHERE p.id = :id";
        // SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'id' in where clause is ambiguous
        /**
         * Trong câu SQL, bạn đang join từ nhiều bảng (ví dụ products JOIN categories) mà 
         * cả hai bảng đều có cột tên là id, 
         * nên MySQL không biết id là của bảng nào ⇒ Gây "ambiguous column" (cột mơ hồ).
         */
        //  Khắc phục:Sửa ở WHERE id = :id thành p.id = :id

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO san_phams 
                (ma_san_pham,ten_san_pham,gia_san_pham,so_luong,danh_muc_id,ngay_nhap,mo_ta,trang_thai,hinh_anh)
                VALUES 
                (:ma_san_pham,:ten_san_pham,:gia_san_pham,:so_luong,:danh_muc_id,:ngay_nhap,:mo_ta,:trang_thai,:hinh_anh)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('ma_san_pham',     $data['ma_san_pham']);
        $stmt->bindParam('ten_san_pham',    $data['ten_san_pham']);
        $stmt->bindParam('gia_san_pham',    $data['gia_san_pham']);
        $stmt->bindParam('so_luong',        $data['so_luong']);
        $stmt->bindParam('ngay_nhap',       $data['ngay_nhap']);
        $stmt->bindParam('danh_muc_id',     $data['danh_muc_id']);
        $stmt->bindParam('mo_ta',           $data['mo_ta']);
        $stmt->bindParam('trang_thai',      $data['trang_thai']);
        $stmt->bindParam('hinh_anh',        $data['hinh_anh']);
        return $stmt->execute();
    }
}