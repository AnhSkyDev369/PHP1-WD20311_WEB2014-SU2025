<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),

    // Các đường dẫn quản lý sách
    'books' => (new BookController)->index(),

    // 'books-create' => (new BookController)->create(), // Hiển thị form thêm
    // 'books-store' => (new BookController)->store(), // Xử lý thêm

    // 'books-edit' => (new BookController)->edit(), // Hiển thị form sửa
    // 'books-update' => (new BookController)->update(), // Xử lý sửa

    // 'books-delete' => (new BookController)->destroy(), // Xử lý xóa


    'users' => (new UserController)->index(),
    'users-create' => (new UserController)->create(),
    'users-store' => (new UserController)->store(),
    'users-edit' => (new UserController)->edit(),
    'users-update' => (new UserController)->update(),
    'users-delete' => (new UserController)->destroy(),
    'users-show' => (new UserController)->show(),
};
