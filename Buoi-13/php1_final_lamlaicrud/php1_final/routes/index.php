<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),

    //  Products
    'products' => (new ProductController)->index(),
    'product-show' => (new ProductController)->show(),
    'product-create' => (new ProductController)->create(),
    'product-store' => (new ProductController)->store(),

    //  Category
    'categories' => (new CategoryController)->index(),
    'category-show' => (new CategoryController)->show(),

};