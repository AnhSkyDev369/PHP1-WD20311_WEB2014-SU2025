<?php

class ProductController
{
    public $modelProduct;
    public $modelCategory;
    //  Thêm modelCategory để bên create() đến form có thể lấy được danh mục sản phẩm

    public function __construct()
    {
        $this->modelProduct  = new Product();
        $this->modelCategory = new Category();
    }

    public function index()
    {
        $title    = "Danh sách sản phẩm";
        $view     = "products/index";
        $products = $this->modelProduct->getAll();
        // require_once BASE_URL;//   Lỗi 1 LƯU Ý: Không phải BASE_URL mà là PATH_VIEW_MAIN
        // debug($products); //Dùng hàm debug(); để xem dữ liệu của mảng
        require_once PATH_VIEW_MAIN;
    }

    public function show()
    //  Truyền tham số $id vào show($id) là sai
    // chỉ viết public function show()
    {
        $title = "Chi tiết sản phẩm";
        $view  = "products/show";

        //  Lỗi too few arguments do thiếu $_GET['id]
        //  Khắc phục
        // $_GET['id'] = $id; Lỗi viết ngược

        $id      = $_GET['id'];
        $product = $this->modelProduct->find($id);

        require_once PATH_VIEW_MAIN;
    }

    public function create()
    {
        $title      = "Thêm mới sản phẩm";
        $view       = "products/create";
        $categories = $this->modelCategory->getAll();
        require_once PATH_VIEW_MAIN;
    }

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
                header("Location: " . BASE_URL . "?action=products");
            } else {
                die('Có lỗi khi thêm sản phẩm');
            }
        }
    }
}
