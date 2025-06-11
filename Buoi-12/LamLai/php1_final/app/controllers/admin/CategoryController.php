<?php

class CategoryController
{
    public $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new Category();   
    }

    public function index()
    {
        //  Hiển thị Giao diện (Bước 8)
        $title = "Danh sách sản phẩm";
        $view = "categories/index";
        
        $categories = $this->modelCategory->getAllCategory();
        // debug($categories);
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function show()
    {
        $title = "Chi tiết sản phẩm";
        $view = "categories/show";

        $id = $_GET['id'];

        $category = $this->modelCategory->findByID($id);
        if (empty($id) || empty($category)) {
            redirect404();
        }
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}