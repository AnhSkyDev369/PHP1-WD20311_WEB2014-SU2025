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
        $title = "Danh Sách Danh Mục";
        $view = "categories/index";

        $categories = $this->modelCategory->getAll();
        require_once PATH_VIEW_MAIN;
    }

    public function show() 
    {
        $title = "Chi Tiết Danh Mục";
        $view = "categories/show";
        $id = $_GET['id'];

        $category = $this->modelCategory->find($id);
        require_once PATH_VIEW_MAIN;
    }
}