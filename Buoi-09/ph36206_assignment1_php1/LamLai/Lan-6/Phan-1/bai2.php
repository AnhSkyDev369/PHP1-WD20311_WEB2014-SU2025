<?php
class Product
{
    public $maSP, $tenSP, $giaSP, $soLuongSP;

    public function __construct($maSP, $tenSP, $giaSP, $soluongSP)
    {
        $this->maSP = $maSP;
        $this->tenSP = $tenSP;
        $this->giaSP = $giaSP;
        $this->soluongSP = $soluongSP;
    }

    public function getTotalValue()
    {
        return $this->giaSP * $this->soluongSP;
    }

    public function display()
    {
    echo "
    <tr>
        <td>{$this->maSP}</td>
        <td>{$this->tenSP}</td>
        <td>". (number_format($this->giaSP, 0, ',', '.')) . " VNĐ" . "</td>
        <td>{$this->soluongSP}</td>
        <td>". number_format($this->getTotalValue(), 0, ',', '.') . " VNĐ" ."</td>
    </tr>";
    }

}
echo "<h3>Danh sách sinh viên</h3>";
echo "<table border='1' cellpadding='5' cellspacing='1'>";
echo "   
     <tr>
        <th>Mã SP</th>
        <th>Tên SP</th>
        <th>Giá SP</th>
        <th>Số Lượng SP</th>
        <th>Tổng Giá Trị SP</th>
    </tr>";


$dsSP = [
    new Product('SP001','Ô TÔ', 250000000, 2),
    new Product('SP002','Xe Máy', 450000000, 3),
    new Product('SP003','Mô Tô', 560000000, 4),
];

foreach ($dsSP as $key => $value) {
    $value->display();
}
echo "</table>";
?>

