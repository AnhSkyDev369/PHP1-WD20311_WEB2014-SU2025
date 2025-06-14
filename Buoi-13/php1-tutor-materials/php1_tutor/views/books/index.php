<a href="<?= BASE_URL . '?action=books-create' ?>">
    Thêm mới
</a>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Cover image</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Publish date</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach ($books as $index => $book) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $book['title'] ?></td>
                <td>
                    <img src="<?= BASE_ASSETS_UPLOADS . $book['cover_image'] ?>" width="80px">
                </td>
                <td><?= $book['author_name'] ?></td>
                <td><?= $book['publisher'] ?></td>
                <td><?= $book['publish_date'] ?></td>
                <td>
                    <a href="<?= BASE_URL . '?action=books-edit&id=' . $book['id'] ?>">
                        Sửa
                    </a>

                    <a href="<?= BASE_URL . '?action=books-delete&id=' . $book['id'] ?>" 
                        onclick="return confirm('Bạn có muốn xóa không?')">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>