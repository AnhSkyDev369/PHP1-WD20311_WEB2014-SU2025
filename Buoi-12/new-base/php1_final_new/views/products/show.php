<ul>
   <img src="<?php echo BASE_ASSETS_UPLOADS . $product['hinh_anh']?> " alt="" width="120Ppx">
   <li>Hình ảnh: </li> 
   <li>Mã sản phẩm: <?= $product['ma_san_pham'] ?></li>
   <li>Tên sản phẩm: <?= $product['ten_san_pham'] ?></li>
   <li>Giá sản phẩm: <?= $product['gia_san_pham'] ?></li>
   <li>Số lượng sản phẩm: <?= $product['so_luong'] ?></li>
   <li>Ngày nhập sản phẩm: <?= $product['ngay_nhap'] ?></li>
   <li>Tên danh mục: <?= $product['ten_danh_muc'] ?></li>
   <li>Mô tả: <?= $product['mo_ta'] ?></li>
   <li>Trạng thái: <?= $product['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng' ?></li>
</ul>