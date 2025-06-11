<?php

class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new Product();   
    }

    public function index()
    {
        //  Hiển thị Giao diện (Bước 8)
        $title = "Danh sách sản phẩm";
        $view = "products/index";
        
        $products = $this->modelProduct->getAllProduct();
        // debug($products);
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function show()
    {
        $title = "Chi tiết sản phẩm";
        $view = "products/show";

        $id = $_GET['id'];

        $product = $this->modelProduct->findByID($id);
        if (empty($id) || empty($product)) {
            redirect404();
        }
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}