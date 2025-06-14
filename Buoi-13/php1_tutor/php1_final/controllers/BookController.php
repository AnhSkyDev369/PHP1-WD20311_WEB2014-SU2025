<?php
class BookController
{
    //  KẾT NỐI VỚI MODEL
    public $modelBook;
    public $modelAuthor;

    public function __construct()
    {
        $this->modelBook   = new Book();
        $this->modelAuthor = new Author();
    }

    //  Hàm hiển thị danh sách
    public function index()
    {
        //  Lấy tất cả dữ liệu từ bảng books
        $books = $this->modelBook->getAll();
        //  Hiển thị ra view
        $title = "Danh sách sách"; //    Tiêu đề hiển thị
        $view  = "books/index";    //    Giao diện sử dụng
        require_once PATH_VIEW_MAIN;
    }

    //  Hiển thị form thêm mới sách
    public function create()
    {
        // echo "Form Thêm";
        // Hiển thị ra view
        $title   = "Thêm mới sách";     //    Tiêu đề hiển thị
        $view    = "books/create";      //    Giao diện sử dụng
        //  Lấy tất cả dữ liệu từ bảng authors
        $authors = $this->modelAuthor->getAll();
        require_once PATH_VIEW_MAIN;
    }

    public function store()
    {
        // echo "Thêm đi";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //  Lấy dữ liệu được gửi từ form
            $data = [
                'title'        => $_POST['title'],
                'author_id'    => $_POST['author_id'],
                'publisher'    => $_POST['publisher'],
                'publish_date' => $_POST['publish_date'],
            ];
            //  debug($data);

            //  Xử lý hình ảnh
            //  Muốn lấy đc hình ảnh ta phải sử dụng $_FILES
            if (isset($_FILES['cover_image'])) {
                $data['cover_image'] = upload_file('books', $_FILES['cover_image']);
            }

            //  Xử lý thêm dữ liệu
            $result = $this->modelBook->insert($data);

            if ($result) {
                header("Location: " . BASE_URL . "?action=books");
            }die("Có lỗi khi thêm dữ liệu");
        }
    }

    public function edit()
    {
        $title  = "Cập nhật sách";      //    Tiêu đề hiển thị
        $view   = "books/edit";         //    Giao diện sử dụng
        $authors = $this->modelAuthor->getAll();
        $id = $_GET['id'];

        //  Hiển thị thông tin chi tiết của sách được sửa
        $book = $this->modelBook->findById($id);
        require_once PATH_VIEW_MAIN;
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            //  Lấy dữ liệu được gửi từ form
            $data = [
                'title'        => $_POST['title'],
                'author_id'    => $_POST['author_id'],
                'publisher'    => $_POST['publisher'],
                'publish_date' => $_POST['publish_date'],
            ];
            $book = $this->modelBook->findById($id);
            // debug($data);
           
            //   Xử lý hình ảnh
            if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
                // Xóa ảnh cũ nếu có
                if (!empty($book['cover_image'])) {
                    $oldImage = PATH_ASSETS_UPLOADS . $book['cover_image'];
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
                // Upload ảnh mới
                $data['cover_image'] = upload_file('books', $_FILES['cover_image']);
            } else {
                // Không upload ảnh mới, giữ nguyên ảnh cũ
                $data['cover_image'] = $book['cover_image'];
            }

            //  Xử lý thêm dữ liệu
            //  Gọi hàm update dữ liệu
            $result = $this->modelBook->update($id, $data);

            if ($result) {
                header("Location: " . BASE_URL . "?action=books");
                return;
            }
            die("Có lỗi khi thêm dữ liệu");
        }
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $book = $this->modelBook->findById($id);
        // Xóa file ảnh nếu có
        if (!empty($book['cover_image'])) {
            $oldImage = PATH_ASSETS_UPLOADS . $book['cover_image'];
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        }
        $result = $this->modelBook->delete($id);
        if ($result) {
            header("Location: " . BASE_URL . "?action=books");
            return;
        }
        die("Có lỗi khi xóa dữ liệu");
    }
}
