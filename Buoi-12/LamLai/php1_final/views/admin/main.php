<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Trang quản trị' ?></title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Thanh điều hướng -->
    <nav class="navbar navbar-expand-xxl bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="<?= BASE_URL_ADMIN ?>"><b>Dashboard</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="<?= BASE_URL_ADMIN . "&action=categories" ?>"><b>Quản lý danh mục</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="<?= BASE_URL_ADMIN . "&action=products"?>"><b>Quản lý sản phẩm</b></a>
            </li>

            <!-- 
            Nếu có tài khoản người dùng đăng nhập thì hiển thị nút đăng xuất
            Sử dụng trong trường hợp làm chức năng đăng nhập

            <?php // if (!empty($_SESSION['user'])): ?>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-danger"
                        href="<?php // echo BASE_URL_ADMIN . '&action=logout' ?>"
                        onclick="return confirm('Có chắc chắn đăng xuất?')"> <b>Đăng xuất</b> </a>
                </li>
            <?php // endif; ?>

            -->

        </ul>
    </nav>

    <!-- nội dung hiển thị -->
    <div class="container">
        <h1 class="mt-3 mb-3"><?= $title ?? 'Trang quản trị' ?></h1>

        <div class="row">
            <?php
            if (isset($view)) {
                require_once PATH_VIEW_ADMIN . $view . '.php';
            }
            ?>
        </div>
    </div>

</body>

</html>