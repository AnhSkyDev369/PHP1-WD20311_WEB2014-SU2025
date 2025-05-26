<?php

class DashBoardController
{
    public function index()
    {
        $dashboard = "Đây là trang Dashboard Admin";
        require_once './views/home/dashboard.php';
    }
}