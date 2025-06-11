<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),

    // Các đường dẫn quản lý sản phẩm
    'products' => (new ProductController)->index(),
    'product-show' => (new ProductController)->show(),
    'product-create' => (new ProductController)->create(),  //  Thêm, hiển thị form thêm
    'product-store' => (new ProductController)->store(),    //  Lưu, xử lý thêm dữ liệu lên CSDL

    'categories' => (new CategoryController)->index(),
    'category-show' => (new CategoryController)->show(),
};