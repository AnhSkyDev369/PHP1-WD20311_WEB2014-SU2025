<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),

    // Các đường dẫn quản lý sản phẩm
    'products' => (new ProductController)->index(),
    'product-show' => (new ProductController)->show(),
    'product-create' => (new ProductController)->create(),
    'product-store' => (new ProductController)->store(),

    'product-edit' => (new ProductController)->edit(),
    'product-update' => (new ProductController)->update(),
    'product-destroy' => (new ProductController)->destroy(),

    'categories' => (new CategoryController)->index(),
    'category-show' => (new CategoryController)->show(),
};