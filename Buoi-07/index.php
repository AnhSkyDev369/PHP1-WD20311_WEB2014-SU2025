<?php
session_start();

require_once './env.php';
require_once './helpers.php';

//  Nơi require_once các model cần sử dụng
require_once './app/Model.php';
require_once './app/Models/UserModel.php';
//  .....

//  Nơi require_once các controller cần sử dụng
require_once './app/Controller.php';
require_once './app/Controllers/HomeController.php';
//  .....

connectDB();

//  Các đường dẫn điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    //  Nơi khai báo các đường dẫn
    '/' => (new HomeController())->index(),
};
