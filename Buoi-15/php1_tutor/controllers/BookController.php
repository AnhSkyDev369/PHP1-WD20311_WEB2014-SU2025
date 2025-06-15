<?php

class BookController
{
    // Kết nối với model
    public $modelBook;
    public $modelAuthor;

    public function __construct()
    {
        $this->modelBook = new Book();
        $this->modelAuthor = new Author();
    }

    // Hàm hiển thị danh sách sách
    public function index()
    {
        // Lấy dữ liệu
        $books = $this->modelBook->getAll();

        // Hiển thị ra view
        $title = "Danh sách sách"; // Tiêu đề hiển thị
        $view = 'books/index';  // Giao diện sử dụng

        require_once PATH_VIEW_MAIN;
    }

    // Hiển thị form thêm
    public function create()
    {
        // Hiển thị danh sách tác giả để lựa chọn
        $authors = $this->modelAuthor->getAll();

        // Hiển thị ra view
        $title = "Thêm mới sách"; // Tiêu đề hiển thị
        $view = 'books/create';  // Giao diện sử dụng

        require_once PATH_VIEW_MAIN;
    }

    // Xử lý thêm
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy dữ liệu được gửi từ form
            $data = [
                'title'         => $_POST['title'],
                'author_id'     => $_POST['author_id'],
                'publisher'     => $_POST['publisher'],
                'publish_date'  => $_POST['publish_date'],
            ];

            // Xử lý hình ảnh
            // Muốn lấy được hình ảnh ta phải sử dụng $_FILES
            if (isset($_FILES['cover_image'])) {
                $data['cover_image'] = upload_file('books', $_FILES['cover_image']);
            }

            // Xử lý thêm dữ liệu
            $result = $this->modelBook->insert($data);

            if ($result) {
                header('Location: ' . BASE_URL . '?action=books');
                exit;
            }
        }
    }

    // Hiển thị form sửa
    public function edit()
    {
        // Hiển thị danh sách tác giả để lựa chọn
        $authors = $this->modelAuthor->getAll();

        $id = $_GET['id'];

        // Hiển thị thông tin chi tiết của sách được sửa
        $book = $this->modelBook->findById($id);

        // Hiển thị ra view
        $title = "Cập nhật sách"; // Tiêu đề hiển thị
        $view = 'books/edit';  // Giao diện sử dụng

        require_once PATH_VIEW_MAIN;
    }

    // Xử lý sửa
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy dữ liệu được gửi từ form
            $data = [
                'title'         => $_POST['title'],
                'author_id'     => $_POST['author_id'],
                'publisher'     => $_POST['publisher'],
                'publish_date'  => $_POST['publish_date'],
            ];

            $id = $_GET['id'];

            // Thông tin chi tiết của sách được sửa
            $book = $this->modelBook->findById($id);

            // Nếu có hình ảnh mới thì xóa ảnh cũ và upload ảnh mới 
            if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
                if (!empty($book['cover_image'])) { // nếu có hình ảnh trong CSDL
                    $oldImage = PATH_ASSETS_UPLOADS . $book['cover_image'];
                    if (file_exists($oldImage)) { // Và tồn tại hình ảnh trong dự án
                        unlink($oldImage); // thì xóa ảnh
                    }
                }
                $data['cover_image'] = upload_file('books', $_FILES['cover_image']);
            } else {
                // Nếu ko csuwra ảnh thì lấy lại hình ảnh cũ
                $data['cover_image'] = $book['cover_image'];
            }

            // Xử lý sửa dữ liệu
            $result = $this->modelBook->update($id, $data);

            if ($result) {
                header('Location: ' . BASE_URL . '?action=books');
                exit;
            }
        }
    }

    // Xóa sách
    public function destroy()
    {
        $id = $_GET['id'];

        $deleted = $this->modelBook->delete($id);

        if ($deleted) {
            header('Location: ' . BASE_URL . '?action=books');
            exit;
        }
    }
}
