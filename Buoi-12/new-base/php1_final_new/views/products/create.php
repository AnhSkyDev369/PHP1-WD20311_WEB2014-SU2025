<!-- Bắt buộc phải có nếu muốn gửi file -->
<form action="<?php echo BASE_URL . '?action=product-store' ?>" method="POST" enctype="multipart/form-data">
    <!-- action xác định địa chỉ mà dữ liệu sẽ được gửi tới-->
     <div>
        <label for="">Mã SP</label>
        <input type="text" name="ma_san_pham" require>
    </div>
    <div>
        <label for="">Tên SP</label>
        <input type="text" name="ten_san_pham" require>
    </div>
     <div>
        <label for="">Giá SP</label>
        <input type="number" name="gia_san_pham" require>
     </div>

     <div>
        <label for="">Số Lượng SP</label>
        <input type="number" name="so_luong" require>
     </div>

     <div>
        <label for="">Ngày Nhập SP</label>
        <input type="date" name="ngay_nhap" require>
     </div>

     <div>
        <label for="">Danh Mục SP</label>
        <select name="danh_muc_id" id="">
            <?php foreach($categories as $category) :?>
            <option value="<?php $category['id']?>">
                <?= $category['ten_danh_muc']?> 
            </option>
            <?php endforeach; ?>
        </select>
     </div>
     
     <div>
        <label for="">Mô tả SP:</label>
        <textarea name="mo_ta" rows="5"  require></textarea>
     </div>
    
     <div>
        <label for="">Hình Ảnh: </label>
        <input type="file" name="hinh_anh">
     </div>
    
     <div>
        <label for="">Trạng Thái: </label>
        <select name="trang_thai" id="">
            <option value="1">Còn Hàng</option>
            <option value="0">Hết Hàng</option>
        </select>
     </div>
    
     <div>
        <button type="submit">Thêm mới</button>
     </div>
</form>