<?php
if (!function_exists('is_upload')) {
    function is_upload($key)
    {
        return isset($_FILES[$key]) && $_FILES[$key]['size'] > 0;
    }
}

if (!function_exists('redirect')) {
    function redirect($path)
    {
        header('Location: ' . $path);
        exit;
    }
}

if (!function_exists('redirect404')) {
    function redirect404()
    {
        header('HTTP/1.1 404 Not Found');
        exit;
    }
}

if (!function_exists('debug')) {
    function debug(...$data)
    {
        echo '<pre>';
        print_r($data);
        die;
    }
}

if (!function_exists('upload_file')) {
    function upload_file(array $file, $folder = null)
    {
        // Thông tin về file
        $fileTmpPath = $file['tmp_name']; // Đường dẫn tạm thời của file
        $fileName = time() . '-' . $file['name']; // Tên file chống trùng bằng timestamp

        $uploadDir = PATH_UPLOADS . $folder . '/';

        // Tạo thư mục nếu chưa tồn tại
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Đường dẫn đầy đủ để lưu file
        $destPath = $uploadDir . $fileName;

        // Di chuyển file từ thư mục tạm thời đến thư mục đích
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            return $destPath;
        }

        throw new \Exception('Lỗi upload file!');
    }
}