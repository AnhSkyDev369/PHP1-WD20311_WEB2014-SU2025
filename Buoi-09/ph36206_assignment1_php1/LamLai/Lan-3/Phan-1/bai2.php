<?php
class Product
{
    //  Định nghĩa 1 class Product ... 
    public $masp, $tensp, $giasp, $soluongsp;

    //  Hàm khởi tạo
    public function __construct($masp, $tensp, $giasp, $soluongsp)
    {
        $this->masp = $masp;
        $this->tensp = $tensp;
        $this->giasp = $giasp;
        $this->soluongsp = $soluongsp;
    }

    //  Phương thức getTotalValue()
    public function getTotalValue() 
    {
        return $this->giasp * $this->soluongsp;    
    }

    //  Phương thức display()
    public function display()
    {
        echo
    "<tr>
        <td>$this->masp</td>
        <td>$this->tensp</td>
        <td>". number_format($this->giasp, 0, ',', '.'). " VNĐ" ."</td>
        <td>$this->soluongsp</td>
        <td>". $this->getTotalValue() ."</td>
    </tr>";    
    }
}

//  Khởi tạo đối tượng
$products = [
    new Product('SP1', 'Máy tính bảng', 1200000, 2),
    new Product('SP2', 'Máy tính bàn', 4400000, 2),
    new Product('SP3', 'Máy tính laptop', 2500000, 3),
    new Product('SP4', 'Tivi', 85500000, 4),
];

//  In danh sách sản phẩm thành bảng
echo "<h3>Danh sách sản phẩm</h3>";
echo "<table border='1' cellpadding='5'cellspacing='0'> ";
echo "
<tr>
        <td>Mã</td>
        <td>Tên</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Tổng giá trị</td>
    </tr>";
foreach ($products as $productvalue) {
    $productvalue->display();
}
echo "</table>";
?>

