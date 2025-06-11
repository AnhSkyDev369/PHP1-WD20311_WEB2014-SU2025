<?php

class ProductController
{
    // Kết nối với model Product
    public $modelProduct;
    public $modelCategory;

    public function __construct()
    {
        $this->modelProduct  = new Product();
        $this->modelCategory = new Category();
    }

    // Hiển thị danh sách sản phẩm
    public function index()
    {
                                            // Hiển thị giao diện
        $title = "Danh sách sản phẩm"; // Tiêu đề hiển thị
        $view  = "products/index";          // Giao diện sử dụng

        // Dữ liệu muốn hiển thị
        $products = $this->modelProduct->getAll();

        // Load view thông qua main layout
        require_once PATH_VIEW_MAIN;
    }

    // Hiển thị chi tiết sản phẩm
    public function show()
    {
        $title = "Chi tiết sản phẩm"; // Tiêu đề hiển thị
        $view  = "products/show";           // Giao diện sử dụng

        $id      = $_GET['id'];
        $product = $this->modelProduct->find($id);

        require_once PATH_VIEW_MAIN;
    }

    // Hàm hiển thị Form thêm
    public function create()
    {
        $title = "Thêm sản phẩm mới";
        $view  = "products/create";

        //  Lấy ra dnah sách danh mục để lựa chọn khi thêm
        $categories = $this->modelCategory->getAll();

        require_once PATH_VIEW_MAIN;
    }

    //  Hàm xử lý thêm dữ liệu
    public function store()
    {
        //   Kiểm tra có đúng là người dùng gửi dữ liệu từ form hay không
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy ra dữ liệu từ form
            $data = [
                'ma_san_pham'  => $_POST['ma_san_pham'],
                'ten_san_pham' => $_POST['ten_san_pham'],
                'gia_san_pham' => $_POST['gia_san_pham'],
                'so_luong'     => $_POST['so_luong'],
                'danh_muc_id'  => $_POST['danh_muc_id'],
                'ngay_nhap'    => $_POST['ngay_nhap'],
                'mo_ta'        => $_POST['mo_ta'],
                'trang_thai'   => $_POST['trang_thai'],
                'hinh_anh'     => $_FILES['hinh_anh']
            ];

            // debug($data);
            //  Xử lý hình ảnh nếu có
            //  Muốn lấy thông tin files gửi lên từ form, ta phải sử dụng $_FILES
            if (isset($_FILES['hinh_anh']))
            {
                $data['hinh_anh'] = upload_file('products', $_FILES['hinh_anh']);
            }

            //  Lưu vào CSDL
            $result = $this->modelProduct->insert($data);
            if ($result) {
                header("Location: . " . BASE_URL . '?action=products');
            } else {
                die('Có lỗi khi thêm sản phẩm');
            }
        }
    }
}
