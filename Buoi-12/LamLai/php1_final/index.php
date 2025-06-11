<?php 

session_start();

// Tự động load các file ko cần require
spl_autoload_register(function ($class) {    
    $fileName = "$class.php";

    $fileModel              = PATH_MODEL . $fileName;
    $fileControllerClient   = PATH_CONTROLLER_CLIENT . $fileName;
    $fileControllerAdmin    = PATH_CONTROLLER_ADMIN . $fileName;

    if (is_readable($fileModel)) {
        // Xong Bước 3
        require_once PATH_MODEL . 'BaseModel.php';
        require_once $fileModel;
    } 
    else if (is_readable($fileControllerClient)) {
        require_once $fileControllerClient;
    }
    else if (is_readable($fileControllerAdmin)) {
        require_once $fileControllerAdmin;
    }
});

require_once './env.php';
require_once './helpers.php';

// Điều hướng
$mode = $_GET['mode'] ?? 'client';

if ($mode == 'admin') {
    # require đường dẫn của admin
    require_once './routes/admin.php';
} else {
    # require đường dẫn của client
    require_once './routes/client.php';
}
