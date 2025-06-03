<?php

class Product
{
    public $maSP, $tenSP, $giaSP, $soLuongSP;

    public function __construct($maSP, $tenSP, $giaSP, $soLuongSP)
    {
        $this->maSP      = $maSP;
        $this->tenSP     = $tenSP;
        $this->giaSP     = $giaSP;
        $this->soLuongSP = $soLuongSP;
    }

    public function getTotalValue()
    {
        return $this->giaSP * $this->soLuongSP;
    }

    public function display()
    {
        echo "
        <tr>
            <td>{$this->maSP}</td>
            <td>{$this->tenSP}</td>
            <td>" . number_format($this->giaSP, 0, ',', '.') . " VNĐ" . "</td>
            <td>{$this->soLuongSP}</td>
            <td>" . number_format($this->getTotalValue(), 0, ',', '.') . " VNĐ" . "</td>
        </tr>";
    }
}

echo "<table border='1' cellpadding='5' cellspacing='1'>";
echo "
    <tr>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Sản Phẩm</th>
        <th>Số Lượng Sản Phẩm</th>
        <th>Tổng Giá Trị Sản Phẩm</th>
    </tr>";
$sanPhams = [
    new Product('SP001', 'Ô tô', 150000000, 2),
    new Product('SP002', 'Xe Máy', 1000000, 3),
    new Product('SP003', 'Xe Đạp', 500000, 6),
];
foreach ($sanPhams as $key => $value) {
    $value->display();
}
echo "</table>";
