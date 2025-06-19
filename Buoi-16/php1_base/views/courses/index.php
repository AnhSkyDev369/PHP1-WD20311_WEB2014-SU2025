<a href="<?=BASE_URL . "?action=users-create"?>" class="btn btn-success">Thêm thông tin</a>
<table class="table table-hover table-striped align-middle">
    <thead>
        <th>STT</th>
        <th>NAME</th>
        <th>THUMBNAIL</th>
        <th>Instructor</th>
        <th>Duration</th>
        <th>Price</th>
        <th>Action</th>
    </thead>
    <tbody>
    <?php foreach ($courses as $course) : ?>
        <tr>
            <td><?=$course['id']?></td>
            <td><?=$course['name']?></td>
            <td>
                <img src="<?=BASE_ASSETS_UPLOADS . $course['thumbnail']?>" width="100px">
            </td>
            <td><?=$course['instructor_name']?></td>
            <td><?=$course['duration']?></td>
            <td><?=$course['price']?></td>
            <td>
                <div class="d-flex gap-1">
                    <a href="<?=BASE_URL . "?action=users-show&id=" . $course['id']?>" class="btn btn-primary">Xem</a>
                    <a href="<?=BASE_URL . "?action=users-edit&id=" . $course['id']?>" class="btn btn-warning">Sửa</a>
                    <a href="<?=BASE_URL . "?action=users-delete&id=" . $course['id']?>" 
                       onclick="return confirm('Bạn có chắc chắn muốn xoá không ?')"
                       class="btn btn-danger">Xoá</a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>