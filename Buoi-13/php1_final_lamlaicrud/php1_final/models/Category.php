<?php

class Category 
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel)->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM danh_mucs";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM danh_mucs
        WHERE id = :id";
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
}