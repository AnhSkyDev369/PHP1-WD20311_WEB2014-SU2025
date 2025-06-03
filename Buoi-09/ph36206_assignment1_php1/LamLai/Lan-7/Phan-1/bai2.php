<?php

    class Product
    {
        public $maSP, $tenSP, $giaSP, $soLuongSP;

        public function __construct($maSP, $tenSP, $giaSP, $soLuongSP)
        {
            $this->maSP  = $maSP;
            $this->tenSP = $tenSP;
            $this->giaSP = $giaSP;
            $this->soLuongSP  = $soLuongSP;
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
                <td>". (number_format($this->giaSP, 0, ',', '.')) . " VNĐ" . "</td>
                <td>{$this->soLuongSP}</td>
                <td>".(number_format($this->getTotalValue(), 0, ',', '.')) . " VNĐ"."</td>
            </tr>";
        }
    }
$sanPhams = [
    new Product('SP001', 'Laptop Văn Phòng', 25000000, 2),
    new Product('SP002', 'Laptop Gaming', 35000000, 3),
    new Product('SP003', 'Laptop Workstation', 45000000, 4),
];
echo "<h3>Danh sách sản phẩm</h3>";
echo "<table border=1 cellspacing='0' cellpadding='5'>";
echo "    
    <tr>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Sản Phẩm</th>
        <th>Số Lượng Sản Phẩm</th>
        <th>Tổng Giá Trị Sản Phẩm</th>
    </tr>";
foreach ($sanPhams as $key => $value) {
    $value->display();
}
echo "</table>";

?>

