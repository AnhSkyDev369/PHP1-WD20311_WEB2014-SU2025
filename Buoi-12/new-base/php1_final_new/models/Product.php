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

    //  Thêm dữ liệu
    public function insert($data)
    {
        $sql = "INSERT INTO san_phams
                (ma_san_pham, ten_san_pham, gia_san_pham, so_luong, ngay_nhap, danh_muc_id, mo_ta, trang_thai, hinh_anh)
                VALUES
                (:ma_san_pham, :ten_san_pham, :gia_san_pham, :so_luong, :ngay_nhap, :danh_muc_id, :mo_ta,:trang_thai, :hinh_anh)";
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
        return $stmt->execute();//  True or false
        
    }
}
