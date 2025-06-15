<ul>
    <li>STT: <?= $user['id']?></li>
    <li>Chức Danh: <?= $user['role_name']?></li>
    <li>FullName: <?= $user['full_name']?></li>
    <li>Email: <?= $user['email']?></li>
    <li>Phone: <?= $user['phone']?> </li>
    <li>Avatar: <img src="<?= BASE_ASSETS_UPLOADS . $user['img_avatar']?>" width="80px"></li>
    <li>Address: <?= $user['address']?></li>
    <li>Created: <?= $user['created_at']?></li>
    <li>Updated: <?= $user['updated_at']?></li>
</ul>