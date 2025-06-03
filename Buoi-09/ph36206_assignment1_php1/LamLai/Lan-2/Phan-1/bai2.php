<?php
class Product
{
    // Định nghĩa 1 class Product
    public $maSP, $tenSP, $giaSP, $soluongSP;

    //  Hàm khởi tạo để gán giá trị cho các thuộc tính
    public function __construct($maSP, $tenSP, $giaSP, $soluongSP)
    {
        $this->maSP      = $maSP;
        $this->tenSP     = $tenSP;
        $this->giaSP     = $giaSP;
        $this->soluongSP = $soluongSP;
    }
    //  Phương thức getTotalValue()
    public function getTotalValue()
    {
        //  Trả về (return) tổng giá trị các sản phẩm trong kho (giá bán x số lượng)
        return $this->giaSP * $this->soluongSP;
    }
    //  Phương thức display() hiển thị thông tin sản phẩm...
    public function display()
    {
        echo "<tr>";
        echo "<td>{$this->maSP}</td>";
        echo "<td>{$this->tenSP}</td>";
        echo "<td>". number_format($this->giaSP, 0, ',', '.') . "VNĐ" ."</td>";
        echo "<td>{$this->soluongSP}</td>";
        echo "<td>" . $this->getTotalValue() . "</td>";
        echo "</tr>";
    }
}
echo "<h3>Danh sách sản phẩm</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<th>Mã sản phẩm</th>";
echo "<th>Tên sản phẩm</th>";
echo "<th>Giá sản phẩm</th>";
echo "<th>Số lượng sản phẩm</th>";
echo "<th>Tổng giá trị sản phẩm</th>";
echo "</tr>";

$san_phams = [
    new Product('SP01', 'Máy tính', 5500000, 2),
    new Product('SP02', 'Laptop', 3000000, 3),
    new Product('SP03', 'Điện thoại', 15000000, 2),
    new Product('SP04', 'Bàn phím', 2000000, 5),
];

foreach ($san_phams as $key => $value) {
    $value->display();
}
echo "</table>";
