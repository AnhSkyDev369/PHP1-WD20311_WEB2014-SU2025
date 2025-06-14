<a href="<?php echo BASE_URL . "?action=product-create"?>">Đi tới trang thêm sản phẩm</a>
<table class="table table-hover table-striped align-middle">
    <thead>
        <th>STT:</th>
        <th>Hình Ảnh:</th>
        <th>Mã Sản Phẩm:</th>
        <th>Tên Sản Phẩm:</th>
        <th>Giá Sản Phẩm:</th>
        <th>Số lượng:</th>
        <th>Ngày Nhập:</th>
        <th>Danh Mục SP:</th>
        <th>Mô Tả: </th>
        <th>Trạng Thái</th>
        <th>Hành Động</th>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <!-- Viết đúng -->
        <tr>
            <td><?php echo $product['id']?></td>
            <td>
                <img src="<?php echo BASE_ASSETS_UPLOADS . $product['hinh_anh'] ?> " alt="" width="120Ppx">
            </td>
            <td><?php echo $product['ma_san_pham']?></td>
            <td><?php echo $product['ten_san_pham']?></td>
            <td><?php echo number_format($product['gia_san_pham'], 0, ',', '.') . " VNĐ"?></td>
            <td><?php echo $product['so_luong']?></td>
            <td><?php echo $product['ngay_nhap']?></td>
            <td><?php echo $product['danh_muc_id']?></td>
            <td><?php echo $product['mo_ta']?></td>
            <td><?php echo $product['trang_thai'] == 1 ? 'Còn hàng' : 'Hết Hàng'?></td>
            <td>
                <a href="<?php echo BASE_URL . "?action=product-show" . "&id=" . $product['id']?>">
                    <button>Xem</button>
                </a>
            </td>
        </tr>

        <!-- <tr>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
            <td>$product['']</td>
        </tr> -->
        <!-- Viết nhầm lẫn PHP với html sai cách -->
        <?php endforeach; ?>
    </tbody>
</table>