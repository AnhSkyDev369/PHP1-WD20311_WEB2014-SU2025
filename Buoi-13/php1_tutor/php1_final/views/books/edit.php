<h1>Cập nhật sách</h1>
<form action="<?= BASE_URL . "?action=book-update" ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">
    <div>
        <label>Tiêu đề</label>
        <input type="text" name="title" value="<?= $book['title'] ?>">
    </div>

    <div>
        <label>Hình ảnh:</label>
        <?php if (!empty($book['cover_image'])) : ?>
            <div>
                <img src="<?= BASE_ASSETS_UPLOADS . $book['cover_image'] ?>" width="100px">
            </div>
        <?php endif; ?>
        <input type="file" name="cover_image">
    </div>

    <div>
        <label>Tác giả:</label>
        <select name="author_id">
            <option value="" disabled>--Chọn Tác Giả--</option>
            <?php foreach ($authors as $author) : ?>
                <option value="<?= $author['id']?>" <?= $book['author_id'] == $author['id'] ? 'selected' : '' ?>>
                    <?= $author['name']?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label>Nhà xuất bản:</label>
        <input type="text" name="publisher" value="<?= $book['publisher'] ?>">
    </div>

    <div>
        <label>Ngày xuất bản:</label>
        <input type="date" name="publish_date" value="<?= $book['publish_date'] ?>">
    </div>

    <div>
        <button type="submit">Cập nhật</button>
    </div>
</form>
