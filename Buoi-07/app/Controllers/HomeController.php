<?php

class HomeController
{
    public function index() 
    {
        $title = "Chào mừng đến với bình nguyên vô tận";
        require_once __DIR__ . '/../../views/home/index.php';
    }
}