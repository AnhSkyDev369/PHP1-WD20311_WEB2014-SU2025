<form action="<?=BASE_URL . "?action=users-update&id=" . $course['id']?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name">Tên Khoá Học: </label>
        <input type="text" name="name" value="<?= $course['name']?>">
    </div>
    <div>
        <label for="thumbnail">Ảnh Khoá Học: </label>
        <?php if(!empty($course['thumbnail'])) : ?>
            <br>
            <img src="<?= BASE_ASSETS_UPLOADS . $course['thumbnail']?>" width="100px">
        <?php endif;?>
    </div>
    <div>
        <label for="instructor_id"> Giảng viên Khoá Học: </label>
        <select name="instructor_id" id="">
            <?php foreach($instructors as $instructor) : ?>
                <option value="<?= $instructor['id']?>" <?= $instructor['id'] == $course['instructor_id'] ? 'selected' : '' ?> >
                    <?= $instructor['name']?>
                </option>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label for="duration">Thời lượng Khoá Học: </label>
        <input type="number" name="duration" required value="<?=$course['duration']?>">
    </div>
    <div>
        <label for="price">Giá Khoá Học: </label>
        <input type="number" name="price" required value="<?=$course['price']?>">
    </div>
    <div>
        <button type="submit">Sửa</button>
    </div>
</form>