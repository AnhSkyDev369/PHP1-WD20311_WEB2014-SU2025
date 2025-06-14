<!-- Khi viết Create, ta phải chú ý form có enctype: multipart/form-data -->
<!-- Action: Lưu dữ liệu ở Store, cụ thể là product-store -->
 <!-- Method Post -->
 <form action="<?= BASE_URL . "?action=product-store"?>" enctype="multipart/form-data" method="POST">
   <div>
    <label for="">Mã Sản Phẩm: </label>
    <input type="text" name="ma_san_pham" require>
   </div>
   <div>
    <label for="">Tên Sản Phẩm: </label>
    <input type="text" name="ten_san_pham" require>
   </div>
   <div>
    <label for="">Giá Sản Phẩm: </label>
    <input type="number" name="gia_san_pham" require>
   </div>
   <div>
    <label for="">Số lượng Sản Phẩm: </label>
    <input type="number" name="so_luong" require>
   </div>
   <div>
    <label for="">Ngày nhập Sản Phẩm: </label>
    <input type="date" name="ngay_nhap" require>
   </div>
   <div>
    <label for="">Danh Mục Sản Phẩm: </label>
    <select name="danh_muc_id" id="">
        <?php foreach($categories as $category) :?>
        <option value="<?=$category['id'] ?>"><?= $category['ten_danh_muc']?></option>
        <?php endforeach;?>
    </select>
   </div>
   <div>
    <label for="">Mô tả Sản Phẩm: </label>
    <!-- <input type="text" name="mo_ta" require> -->
     <textarea name="mo_ta" id=""></textarea require>
   </div>
   <div>
    <label for="">Trạng Thái Sản Phẩm: </label>
    <!-- <input type="text" name="trang_thai" require> -->
     <select name="trang_thai" id="">
        <option value="1">Còn Hàng</option>
        <option value="0">Hết Hàng</option>
     </select>
   </div>
   <div>
    <label for="">Hình Ảnh Sản Phẩm: </label>
    <input type="file" name="hinh_anh" require>
   </div>
   <div>
    <button type="submit">Thêm sản phẩm</button>
   </div>
 </form>