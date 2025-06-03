<?php

    class Product
    {
        public $maSanPham, $tenSanPham, $giaSanPham, $soLuongSanPham;

        public function __construct($maSanPham, $tenSanPham, $giaSanPham, $soLuongSanPham)
        {
            $this->maSanPham      = $maSanPham;
            $this->tenSanPham     = $tenSanPham;
            $this->giaSanPham     = $giaSanPham;
            $this->soLuongSanPham = $soLuongSanPham;
        }

        public function getTotalValue()
        {
            return $this->giaSanPham * $this->soLuongSanPham;
        }

        public function display()
        {
            echo "
    <tr>
        <td>{$this->maSanPham}</td>
        <td>{$this->tenSanPham}</td>
        <td>". (number_format($this->giaSanPham, 0, ',', '.')) . " VNĐ" ."</td>
        <td>{$this->soLuongSanPham}</td>
        <td>". (number_format($this->getTotalValue(), 0, ',', '.')) . " VNĐ" . "</td>
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
        new Product('SanPham1', 'Máy Bay', 8002500000000, 2),
        new Product('SanPham2', 'Tên Lửa', 30000000000, 1),
        new Product('SanPham3', 'Tàu Ngầm', 600500000000, 3),
    ];
    foreach ($sanPhams as $key => $value) {
        $value->display();
}
