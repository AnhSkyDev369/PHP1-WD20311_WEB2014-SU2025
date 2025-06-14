<form action="<?= BASE_URL . '?action=books-update&id=' . $book['id'] ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" value="<?= $book['title'] ?>">
    </div>
    <div>
        <label for="cover_image">hình ảnh:</label>
        <input type="file" name="cover_image">
        <?php if ($book['cover_image']) : ?>
            <div>
                <img src="<?= BASE_ASSETS_UPLOADS . $book['cover_image'] ?>" width="80px">
            </div>
        <?php endif; ?>
    </div>
    <div>
        <label for="author_id">Tác giả:</label>
        <select name="author_id">
            <option selected disabled>--Chọn tác giả--</option>
            <?php foreach ($authors as $auth) : ?>
                <option value="<?= $auth['id'] ?>" <?= $auth['id'] == $book['author_id'] ? 'selected' : '' ?>>
                    <?= $auth['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="publisher">Nhà xuất bản:</label>
        <input type="text" name="publisher" value="<?= $book['publisher'] ?>">
    </div>
    <div>
        <label for="publish_date">Ngày phát hành:</label>
        <input type="date" name="publish_date" value="<?= $book['publish_date'] ?>">
    </div>
    <button type="submit">Gửi</button>
</form>