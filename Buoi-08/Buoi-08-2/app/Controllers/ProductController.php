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
        $products = $this->modelProduct->getAllProduct();
        debug($products);
    }
}