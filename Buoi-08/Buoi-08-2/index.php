<?php
session_start();

require_once './env.php';
require_once './helpers.php';

//  Nơi require_once các model cần sử dụng
require_once './app/Model.php';
require_once './app/Models/Product.php';
require_once './app/Models/Category.php';
//  .....

//  Nơi require_once các controller cần sử dụng
require_once './app/Controller.php';
require_once './app/Controllers/HomeController.php';
require_once './app/Controllers/ProductController.php';
require_once './app/Controllers/CategoryController.php';

//  .....

// connectDB();

//  Các đường dẫn điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    //  Nơi khai báo các đường dẫn
    '/' => (new HomeController())->index(),

    //  Route Đường dẫn quản lý sản phẩm
    'list-product' => (new ProductController())->index(),

    'list-category' => (new CategoryController())->index(),
};
