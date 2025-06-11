<table class="table table-hover table-striped align-middle">
    <thead>
        <th>STT</th>
        <th>Hình ảnh</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Ngày nhập</th>
        <th>Danh mục</th>
        <th>Trạng thái</th>
        <th>Hành động</th>
    </thead>
    <tbody>
        <?php foreach($products as $product) : ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['hinh_anh'] ?></td>
                <td><?= $product['ma_san_pham'] ?></td>
                <td><?= $product['ten_san_pham'] ?></td>
                <td><?= $product['gia_san_pham'] ?></td>
                <td><?= $product['so_luong'] ?></td>
                <td><?= $product['ngay_nhap'] ?></td>
                <td><?= $product['ten_danh_muc'] ?></td>
                <td><?= $product['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng' ?></td>
                <td>
                    <a href="<?= BASE_URL . '?action=product-show&id=' . $product['id'] ?>">
                        <button>Xem</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>