<a href="<?= BASE_URL . "?action=book-create" ?>" class="btn btn-success">Thêm mới</a>
<table class="table table-hover table-striped align-middle">
    <thead>
        <th>ID: </th>
        <th>TITLE: </th>
        <th>COVER IMAGE: </th>
        <th>AUTHOR: </th>
        <th>PUBLISHER: </th>
        <th>PUBLISH DATE: </th>
        <th>HÀNH ĐỘNG: </th>
    </thead>
    <tbody>
        <?php foreach($books as $book) :?>
        <tr>
            <td><?=$book['id'] ?></td>
            <td><?=$book['title'] ?></td>
            <td>
                <img src="<?= BASE_ASSETS_UPLOADS . $book['cover_image']?>" width="100px">
            </td>
            <td><?=$book['author_name'] ?></td>
            <td><?=$book['publisher'] ?></td>
            <td><?=$book['publish_date'] ?></td>
            <td>
                <a href="<?= BASE_URL . "?action=book-edit&id=" . $book['id']?>">Sửa</a>
                |
                <a href="<?= BASE_URL . "?action=book-destroy&id=" . $book['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sách này?');">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>