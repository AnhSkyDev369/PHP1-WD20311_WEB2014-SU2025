<ul>
    <li>Hình ảnh: </li>
    <li>Mã sản phẩm: <?= $product['ma_san_pham']?></li>
    <li>Tên sản phẩm : <?= $product['ten_san_pham'] ?></li>
    <li>Giá sản phẩm: <?= number_format($product['gia_san_pham'], 0, ',', '.') . " VNĐ" ?></li>
    <li>Số lượng sản phẩm : <?= $product['so_luong']?></li>
    <li>Ngày nhập: <?= $product['ngay_nhap']?></li>
    <li>Tên danh mục: <?= $product['ten_danh_muc'] ?> </li>
    <li>Mô tả: <?= $product['mo_ta'] ?> </li>
    <li>Trạng thái : <?= $product['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng' ?> </li>
</ul>

<!-- BTVN:
    Xây dựng trang quản lý danh mục:
    -   1. Hiển thị được danh sách danh mục ra table
    -   2. Hiển thị được thông tin chi tiết của danh mục
-->