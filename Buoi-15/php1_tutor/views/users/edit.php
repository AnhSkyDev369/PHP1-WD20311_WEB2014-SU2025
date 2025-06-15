<form action="<?php echo BASE_URL . "?action=users-update&id=" . $user['id']?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="role_id">Chức vụ</label>
        <select name="role_id" id="">
            <?php foreach($roles as $role):  ?>
                <option value="<?=$role['id']?>"><?=$role['name']?></option>
            <?php endforeach;?>

        </select>
    </div>
    <div>
        <label for="full_name">Họ Tên: </label>
        <input type="text" name="full_name" value="<?= $user['full_name']?>">
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" name="email" value="<?= $user['email']?>">
    </div>
    <div>
        <label for="phone">SDT: </label>
        <input type="number" name="phone" value="<?= $user['phone']?>">
    </div>
    <div>
        <label for="img_avatar">Hình Ảnh: </label>
        <input type="file" name="img_avatar" value="">
        <?php if(!empty($user['img_avatar'])): ?>
            <br>
            <img src="<?= BASE_ASSETS_UPLOADS . $user['img_avatar']?>"  width="80px">
        <?php endif;?>
    </div>
    <div>
        <label for="address">Địa chỉ:  </label>
        <input type="text" name="address" value="<?= $user['address']?>">
    </div>
    <div>
        <label for="created_at">Ngày Tạo:  </label>
        <input type="date" name="created_at" value="<?= date('Y-m-d', strtotime($user['created_at'])) ?>">
    </div>
    <div>
        <label for="updated_at">Ngày Sửa: </label>
        <input type="date" name="updated_at" value="<?= date('Y-m-d', strtotime($user['updated_at'])) ?>">
    </div>
    <div>
        <button type="submit">Cập nhật</button>
    </div>
</form>