<a href="<?php echo BASE_URL . '?action=product-create'?>">Thêm mới</a>
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
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id']?></td>
                <td>
                    <img src="<?php echo BASE_ASSETS_UPLOADS . $product['hinh_anh']?> " alt="" width="120Ppx">
                </td>
                <td><?php echo $product['ma_san_pham']?></td>
                <td><?php echo $product['ten_san_pham']?></td>
                <td><?php echo $product['gia_san_pham']?></td>
                <td><?php echo $product['so_luong']?></td>
                <td><?php echo $product['ngay_nhap']?></td>
                <td><?php echo $product['ten_danh_muc']?></td>
                <td><?php echo $product['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng'?></td>
                <td>
                    <a href="<?php echo BASE_URL . '?action=product-show&id=' . $product['id']?>">
                        <button>Xem</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>