<table class="table table-hover">
    <thead>
        <th>STT</th>
        <th>Hình Ảnh</th>
        <th>Mã SP</th>
        <th>Tên SP</th>
        <th>Giá SP</th>
        <th>Số Lượng SP</th>
        <th>Ngày Nhập SP</th>
        <th>Danh Mục SP</th>
        <th>Trạng thái SP</th>
        <th>Hành ĐỘNG</th>
    </thead>
    <tbody>
        <?php foreach($products as $product) :?>
        <tr>
            <td><?= $product['id']?></td>
            <td><?= $product['hinh_anh']?></td>
            <td><?= $product['ma_san_pham']?></td>
            <td><?= $product['ten_san_pham']?></td>
            <td><?= number_format($product['gia_san_pham'],0, ',', '.') . " VNĐ" ?></td>
            <td><?= $product['so_luong']?></td>
            <td><?= $product['ngay_nhap']?></td>
            <td><?= $product['ten_danh_muc']?></td>
            <td><?= $product['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng' ?></td>
            <td>
                <a href="<?= BASE_URL_ADMIN . '&action=product-show' . '&id=' . $product['id']?>">
                    <button>Xem</button>
                    <button>Sửa</button>
                    <button>Xoá</button>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>