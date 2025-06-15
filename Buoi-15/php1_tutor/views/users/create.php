<form action="<?php echo BASE_URL . "?action=users-store"?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="role_id">Chức vụ</label>
        <select name="role_id" id="">
            <option selected disabled>--Chọn Chức Vụ--</option>
            <?php foreach($roles as $role):  ?>
                <option value="<?=$role['id']?>"><?=$role['name']?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label for="full_name">Họ Tên: </label>
        <input type="text" name="full_name">
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="phone">SDT: </label>
        <input type="number" name="phone">
    </div>
    <div>
        <label for="img_avatar">Hình Ảnh: </label>
        <input type="file" name="img_avatar">
    </div>
    <div>
        <label for="address">Địa chỉ:  </label>
        <input type="text" name="address">
    </div>
    <div>
        <label for="created_at">Ngày Tạo:  </label>
        <input type="date" name="created_at">
    </div>
    <div>
        <label for="updated_at">Ngày Sửa: </label>
        <input type="date" name="updated_at">
    </div>
    <div>
        <button type="submit">Thêm mới</button>
    </div>
</form>