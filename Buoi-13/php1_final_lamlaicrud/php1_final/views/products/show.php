<ul>
    <!-- Udifined $product 
        Viết hàm show(); có $product trỏ đến modelProduct->find($id) thì mới hết lỗi  
    -->
    <li>STT: <?= $product['id'] ?></li>
    <li>Hình Ảnh: <?= $product['hinh_anh'] ?></li>
    <li>Mã Sản Phẩm: <?= $product['ma_san_pham'] ?></li>
    <li>Tên Sản Phẩm: <?= $product['ten_san_pham'] ?></li>
    <li>Giá Sản Phẩm: <?= number_format($product['gia_san_pham'],0,',', '.') . " VNĐ" ?></li>
    <li>Số lượng: <?= $product['so_luong'] ?></li>
    <li>Ngày Nhập: <?= $product['ngay_nhap'] ?></li>
    <li>Danh Mục SP: <?= $product['danh_muc_id'] ?></li>
    <li>Mô Tả:  <?= $product['mo_ta'] ?></li>
    <li>Trạng Thái: <?= $product['trang_thai'] == 1 ? 'Còn hàng' : 'Hết Hàng' ?> </li>
</ul>









