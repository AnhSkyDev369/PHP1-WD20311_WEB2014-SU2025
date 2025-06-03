<?php
//  Bài 2: Quản lý sản phẩm nâng cao
//  1. Định nghĩa 1 class Product với đầy đủ các thuộc tính ...

class Product
{
    public $maSP, $tenSP, $giaBanSP, $soLuongSP;

    //  Thêm các phương thức sau:

    //  -   Hàm khởi tạo để gán giá trị cho các thuộc tính:
    public function __construct($maSP, $tenSP, $giaBanSP, $soLuongSP)
    {
        $this->maSP      = $maSP;
        $this->tenSP     = $tenSP;
        $this->giaBanSP  = $giaBanSP;
        $this->soLuongSP = $soLuongSP;
    }

    //  -   Phương thức getTotalValue() trả về tổng giá trị cảu sản phẩm trong kho
    public function getTotalValue()
    {
        return $this->giaBanSP * $this->soLuongSP;
    }

    //  -   Phương thức display() để hiển thị thông tin sản phẩm dưới dạng bảng HTML
    public function display()
    {
        echo "<tr>";
        echo "<td>{$this->maSP}</td>";
        echo "<td>{$this->tenSP}</td>";
        echo "<td>{$this->giaBanSP}</td>";
        echo "<td>{$this->soLuongSP}</td>";
        echo "<td>" . $this->getTotalValue() . "</td>";
        echo "<tr/>";
    }
}
//  -   Khởi tạo ít nhất 3 đối tượng Product với dữ liệu tự chọn
$sanPhams = [
    new Product('SP001', 'Bàn phím cơ', 250000, 2),
    new Product('SP002', 'Chuột Bluetooth', 100000, 3),
    new Product('SP003', 'Màn hình máy tính', 3500000, 4),
    new Product('SP004', 'Laptop Acer ', 24000000, 5),
];

//  -   In danh sách sản phẩm thành bảng HTML

echo "<h3>Danh sách sản phẩm</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<th>Mã sản phẩm</th>";
echo "<th>Tên sản phẩm</th>";
echo "<th>Số lượng sản phẩm</th>";
echo "<th>Giá bán sản phẩm</th>";
echo "<th>Tổng giá trị sản phẩm</th>";
echo "<tr/>";

foreach ($sanPhams as $value) {
    $value->display();
}
echo "</table>";
