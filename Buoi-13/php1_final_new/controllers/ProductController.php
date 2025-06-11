<?php

class ProductController
{
    // Kết nối với model Product
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new Product();
    }

    // Hiển thị danh sách sản phẩm
    public function index()
    {
        // Hiển thị giao diện
        $title = "Danh sách sản phẩm"; // Tiêu đề hiển thị
        $view = "products/index"; // Giao diện sử dụng

        // Dữ liệu muốn hiển thị
        $products = $this->modelProduct->getAll();

        // Load view thông qua main layout
        require_once PATH_VIEW_MAIN;
    }

    // Hiển thị chi tiết sản phẩm
    public function show()
    {
        $title = "Chi tiết sản phẩm"; // Tiêu đề hiển thị
        $view = "products/show"; // Giao diện sử dụng

        $id = $_GET['id'];
        $product = $this->modelProduct->find($id);

        require_once PATH_VIEW_MAIN;
    }
}
