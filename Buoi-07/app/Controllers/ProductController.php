<?php

class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        //  Khởi tạo đối tượng product
        //  để thực hiện các phương thức truy vấn trong model product
        $this->modelProduct = new Product();
    }

    //  Hàm xử lý hiển thị danh sách sản phẩm
    public function index()
    {
        // echo "Danh sách sản phẩm";
        $products = $this->modelProduct->getAllProduct();
        // echo '<pre/>';
        // var_dump($products);
        debug($products);
    }

}
