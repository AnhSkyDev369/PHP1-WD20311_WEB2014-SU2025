<?php

$action = $_GET['action'] ?? '/';

// Kiểm tra đăng nhập nếu là user thì quay về trang đăng nhập
// if (
//     empty($_SESSION['user'])
//     && !in_array($action, ['show-form-login', 'login'])
// ) {
//     header('Location: ' . BASE_URL_ADMIN . '&action=show-form-login');
//     exit();
// }

//  Bước 6
match ($action) {
    '/'         => (new DashboardController)->index(),

    //  Các đường dẫn quản lý sản phẩm
    'products' => (new ProductController)->index(),
    'product-show' => (new ProductController)->show(),
    // Các đường dẫn chức năng authhen
    // 'show-form-login'       => (new AuthenController)->showFormLogin(),
    // 'login'                 => (new AuthenController)->login(),
    // 'logout'                => (new AuthenController)->logout(),
};
