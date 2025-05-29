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
        echo "Danh sách sản phẩm";

    }
    
}