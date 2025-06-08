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
        $title = "Danh sách Danh Mục";
        $view = "categories/index";

        $categories = $this->modelCategory->getAllCategory();
        // debug($categories);
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function show()
    {
        $title = "Chi tiết Danh Mục";
        $view = "categories/show";
        
        $id = $_GET['id'];
        $category = $this->modelCategory->find($id);

        if (empty($id) || empty($category)) {
            redirect404();
        }
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}