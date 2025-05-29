<?php

class HomeController
{
    public function index() 
    {
        $title = "Chào mừng đến với bình nguyên vô tận";
        require_once './views/home/index.php';
    }
}