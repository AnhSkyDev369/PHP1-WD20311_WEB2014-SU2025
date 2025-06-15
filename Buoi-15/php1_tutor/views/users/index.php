<a href="<?=BASE_URL . "?action=users-create" ?>" class="btn btn-success">Thêm mới người dùng</a>
<table class="table table-hover table-striped align-middle">
    <thead>
        <th>ID</th>
        <th>Role</th>
        <th>Full name: </th>
        <th>Email</th>
        <th>Phone</th>
        <th>Img_Avatar</th>
        <th>Address</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Hành Động: </th>
    </thead>
    <tbody>
        <?php foreach ($users as $index => $user) : ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $user['role_name']?></td>
            <td><?= $user['full_name']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['phone']?></td>
            <td>
            <?php if(!empty($user['img_avatar'])): ?>
            <br>
            <img src="<?= BASE_ASSETS_UPLOADS . $user['img_avatar']?>"  width="80px">
            <?php endif;?>
            </td>
            <td><?= $user['address']?></td>
            <td><?= $user['created_at']?></td>
            <td><?= $user['updated_at']?></td>
            <td>
                <a href="<?= BASE_URL . "?action=users-show&id= " . $user['id']?>">Chi tiết</a>
                <a href="<?= BASE_URL . "?action=users-edit&id= " . $user['id']?>">Sửa</a>
                <a href="<?= BASE_URL . "?action=users-delete&id= " . $user['id']?>" onclick="return confirm('Bạn chắc chắn muốn xoá chứ ?')">Xoá</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>