<h1>Thêm sách</h1>
<form action="<?= BASE_URL . "?action=book-store" ?>" method="POST" enctype="multipart/form-data">
    <div>
      <label for="">Tiêu đề</label>
        <input type="text" name="title">
    </div>
      <div>
      <label for="">Hình ảnh: </label>
        <input type="file" name="cover_image">
    </div>
      <div>
      <label for="">Tác giả:  </label>
        <select name="author_id" id="">
            <option value="" selected disabled>--Chọn Tác Giả--</option>
            <?php foreach ($authors as $author) : ?>
                <option value="<?= $author['id']?>"><?= $author['name']?></option>
            <?php endforeach; ?>
        </select>
    </div>
      <div>
      <label for="">Nhà xuất bản: </label>
        <input type="text" name="publisher">
    </div>
      <div>
      <label for="">Ngày xuất bản:  </label>
        <input type="date" name="publish_date">
    </div>
    <div>
        <button type="submit">Thêm</button>
    </div>
</form>