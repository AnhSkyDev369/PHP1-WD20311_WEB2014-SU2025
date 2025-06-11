<?php

class CategoryController
{
    public $modelBook, $modelCategory;
    public function __construct()
    {
        $this->modelCategory = new CategoryModel();
        $this->modelBook = new BookModel();        
    }

    public function index()
    {
        $title = "Danh Sách Thể Loại";
        $view = "categories/index";

        $categories = $this->modelCategory->getAllCategory();
        
    }
}