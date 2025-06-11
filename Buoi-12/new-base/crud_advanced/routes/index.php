<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),

    // Các đường dẫn quản lý sản phẩm
//     'products' => (new ProductController)->index(),
//     'product-show' => (new ProductController)->show(),

//     'categories' => (new CategoryController)->index(),
//     'category-show' => (new CategoryController)->show(),
};