<?php

class ProductController
{
    //  Bước 5
    //  Kết nối với model Product
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new Product();
    }

    //  Hiển thị danh sách sản phẩm
    public function index()
    {
        //  Hiển thị giao diện (Bước 8)
        $title = "Danh sách sản phẩm";//    Tiêu đề hiển thị
        $view = "products/index";//   Giao diện sủ dụng 

        //  Dữ liệu muốn hiển thị
        $products = $this->modelProduct->getAll();
        // debug($products);
        // debug($products);

        //  Sử dụng layouts admin để hiển thị
        require_once PATH_VIEW_ADMIN_MAIN;//  Dòng mặc định
    }

    //  Bài lab 5: 
    //  Xây dựng lại giao diện trang quản trị có đầy đủ các thành phần header, sidebar, footer
    //  (Chỉ được phép require vào layouts chính ) 
    //  Hiển thị đúng tên của danh mục ra màn hình

    //  Hàm hiển thị chi tiết sản phẩm

    //  Bước 10
    public function show()
    {   
        $title = "Chi tiết sản phẩm";//    Tiêu đề hiển thị
        $view = "products/show";//   Giao diện sử dụng 
     
        $id = $_GET['id'];
        $product = $this->modelProduct->find($id);
        if (empty($id) || empty($product)) {
            redirect404();
        } 

        require_once PATH_VIEW_ADMIN_MAIN;
        // debug($product);
    }
}