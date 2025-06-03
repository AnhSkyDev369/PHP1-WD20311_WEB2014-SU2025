<?php

class Product
{
    public $maSP;
    public $tenSP;
    public $giaBan;
    public $soLuong;

    public function __construct($maSP, $tenSP, $giaBan, $soLuong)
    {
        $this->maSP    = $maSP;
        $this->tenSP   = $tenSP;
        $this->giaBan  = $giaBan;
        $this->soLuong = $soLuong;
    }

    public function getTotalValue()
    {
        return $this->giaBan * $this->soLuong;
    }

    public function display()
    {
        echo "<tr>";
        echo "<td>{$this->maSP}</td>";
        echo "<td>{$this->tenSP}</td>";
        echo "<td>" . number_format($this->giaBan, 0, ',', '.') . " đ</td>";
        echo "<td>{$this->soLuong}</td>";
        echo "<td>" . number_format($this->getTotalValue(), 0, ',', '.') . " đ</td>";
        echo "</tr>";
    }
}

// Danh sách sản phẩm
$products = [
    new Product('SP01', 'Máy tính', 15000000, 10),
    new Product('SP02', 'Điện thoại', 2500000, 10),
    new Product('SP03', 'Ipad', 450000, 10),
    new Product('SP04', 'Màn hình', 500000, 10),
];

// Hiển thị bảng
echo '<h3>Danh sách sản phẩm</h3>';
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá bán</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
      </thead>
      <tbody>";
foreach ($products as $product) {
    $product->display();
}
echo "</tbody></table>";
