<?php
session_start();

require_once './env.php';
require_once './helpers.php';

require_once './app/Model.php';
require_once './app/Models/Product.php';

require_once './app/Controller.php';
require_once './app/Controllers/HomeController.php';
require_once './app/Controllers/ProductController.php';

$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => (new HomeController())->index(),
    'list-product' => (new ProductController())->index(),
    'list-category' => (new CategoryController())->index(),
};
