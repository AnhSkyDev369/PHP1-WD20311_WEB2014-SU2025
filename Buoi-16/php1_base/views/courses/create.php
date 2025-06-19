<form action="<?=BASE_URL . "?action=users-store"?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name">Tên Khoá Học: </label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="thumbnail">Ảnh Khoá Học: </label>
        <input type="file" name="thumbnail" required>
    </div>
    <div>
        <label for="instructor_id"> Giảng viên Khoá Học: </label>
        <select name="instructor_id" id="">
            <option selected disabled>--Chọn Giảng Viên--</option>
            <?php foreach($instructors as $instructor) :?>
                <option value="<?=$instructor['id']?>"><?=$instructor['name']?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label for="duration">Thời lượng Khoá Học: </label>
        <input type="number" name="duration" required>
    </div>
    <div>
        <label for="price">Giá Khoá Học: </label>
        <input type="number" name="price" required>
    </div>
    <div>
        <button type="submit">Thêm</button>
    </div>
</form>