<table class="table table-hover table-striped align-middle">
    <thead>
        <th>STT</th>
        <th>Tên Danh Mục</th>
    </thead>
    <tbody>
        <?php foreach($categories as $category) : ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['ten_danh_muc'] ?></td>
                <td>
                    <a href="<?= BASE_URL . '?action=category-show&id=' . $category['id'] ?>">
                        <button>Xem</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>