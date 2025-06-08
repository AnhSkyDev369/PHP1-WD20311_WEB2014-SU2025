<?php
define('BASE_URL',                  'http://localhost/FPT-Code/WD20311_WEB2014/Buoi-11/php1_final/'); // Định nghĩa URL gốc của website (Bước 1): Dán Url trên web vào BASE_URL
define('BASE_URL_ADMIN',            BASE_URL . '?mode=admin'); // Định nghĩa URL gốc dành cho trang quản trị

define('PATH_ROOT',                 __DIR__ . '/'); // Đường dẫn tuyệt đối đến thư mục gốc của project (nơi đặt file index.php)

// Đường dẫn tuyệt đối đến thư mục chứa các controller
define('PATH_CONTROLLER_ADMIN',     PATH_ROOT . 'app/controllers/admin/');
define('PATH_CONTROLLER_CLIENT',    PATH_ROOT . 'app/controllers/client/');

// Đường dẫn tuyệt đối đến thư mục chứa các model
define('PATH_MODEL',                PATH_ROOT . 'app/models/');

// Đường dẫn URL đến thư mục chứa tài nguyên (css, js, ảnh...)
define('BASE_ASSETS_ADMIN',         BASE_URL . 'assets/admin/');
define('BASE_ASSETS_CLIENT',        BASE_URL . 'assets/client/');

// Đường dẫn tuyệt đối đến thư mục lưu trữ file upload
define('PATH_UPLOADS',              PATH_ROOT . 'storage/uploads/');

// Đường dẫn tuyệt đối đến file layout chính
define('PATH_VIEW_ADMIN_MAIN',      PATH_ROOT . 'views/admin/main.php');
define('PATH_VIEW_CLIENT_MAIN',     PATH_ROOT . 'views/client/main.php');

// Đường dẫn tuyệt đối đến thư mục view (Chứa các file giao diện để kế thừa vào layout chính)
define('PATH_VIEW_ADMIN',           PATH_ROOT . 'views/admin/');
define('PATH_VIEW_CLIENT',          PATH_ROOT . 'views/client/');

// Cấu hình kết nối CSDL
define('DB_HOST',                   'localhost');
define('DB_PORT',                   '3306');
define('DB_USERNAME',               'root');
define('DB_PASSWORD',               '');
define('DB_NAME',                   'php1_wd20311');//  (Bước 3): Dán tên db trên phpmyadmin vào DB_NAME 
