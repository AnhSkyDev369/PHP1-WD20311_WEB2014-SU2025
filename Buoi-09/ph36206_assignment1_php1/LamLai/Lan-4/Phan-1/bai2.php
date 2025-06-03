<?php
class Product
{
    //  -   Định nghĩa class Product
    public $maSanPham, $tenSanPham, $giaBanSanPham, $soLuongSanPham;
    //  Hàm khởi tạo gán giá trị cho các thuộc tính
    public function __construct($maSanPham, $tenSanPham, $giaBanSanPham, $soLuongSanPham)
    {
        $this->maSanPham      = $maSanPham;
        $this->tenSanPham     = $tenSanPham;
        $this->giaBanSanPham  = $giaBanSanPham;
        $this->soLuongSanPham = $soLuongSanPham;
    }
    //  -   Phương thức getTotalValue() trả về tổng giá trị sản phẩm
    public function getTotalValue()
    {
        return $this->giaBanSanPham * $this->soLuongSanPham;
    }
    //  -   Phương thức display() hiển thị thông tin
    public function display()
    {
        echo "
        <tr>
            <td>$this->maSanPham</td>
            <td>$this->tenSanPham</td>
            <td>" . number_format($this->giaBanSanPham, 0, ',', '.') . " VNĐ" .  "</td>
            <td>$this->soLuongSanPham</td>
            <td>" . number_format($this->getTotalValue(), 0, ',', '.') . " VNĐ" . "</td>
    </tr>";
    }
}

//  -   Khởi tạo 3 đối tượng Product
$sanPhams = [
    new Product('SP001', 'Máy Tính', 20000000, 3),
    new Product('SP002', 'Điện thoại', 25000000, 1),
    new Product('SP003', 'PC', 15000000, 2),
];

//  -   In danh sách sản phẩm thành bảng
echo "<h3>Danh sách sản phẩm</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "
    <tr>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Bán Sản Phẩm</th>
        <th>Số Lượng Sản Phẩm </th>
        <th>Tổng Giá Trị Sản Phẩm</th>
    </tr>";
//  -   Sử dụng foreach để duyệt mảng và in ra danh sách sản phẩm
foreach ($sanPhams as $sanphamkey => $sanphamvalue) {
    $sanphamvalue->display();
}  
echo "</table>";
