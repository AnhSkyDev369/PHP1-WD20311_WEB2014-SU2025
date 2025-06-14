<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    // '/'         => (new HomeController)->index(),
    '/'            => (new HomeController)->index(),

    //  Các đường dẫn quản lý sách
    'books'     => (new BookController)->index(),
    'book-create'     => (new BookController)->create(),//    Hiển thị form thêm
    'book-store'     => (new BookController)->store(),
    'book-edit'     => (new BookController)->edit(),
    'book-update'     => (new BookController)->update(),
    'book-destroy'     => (new BookController)->destroy(),

};