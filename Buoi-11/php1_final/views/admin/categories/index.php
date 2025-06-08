<!-- Đây là view index của bảng Danh mục -->
 <table class="table table-hover">
    <thead>
        <th>STT</th>
        <th>Tên Danh Mục</th>
    </thead>
    <tbody>
        <?php foreach($categories as $category) : ?>
          <tr>
            <td><?= $category['id']?></td>
            <td><?= $category['ten_danh_muc']?></td>
             <td>
            <a href="<?= BASE_URL_ADMIN . '&action=category-show' . '&id=' . $category['id']?>">
                <button>Xem</button>
                <button>Sửa</button>
            </a>
        </td>
          </tr>
        <?php endforeach; ?>
       
    </tbody>
 </table>