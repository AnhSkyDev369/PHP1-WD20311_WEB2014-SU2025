<?php

class CategoryController
{
    public $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new Product();
    }

    public function index()
    {
        $title = "Danh sách Danh mục";
        $view = "categories/index";
        $categories = $this->modelCategory->getAll();
        // require_once BASE_URL;//   Lỗi 1 LƯU Ý: Không phải BASE_URL mà là PATH_VIEW_MAIN    
        // debug($categories); //Dùng hàm debug(); để xem dữ liệu của mảng
        require_once PATH_VIEW_MAIN;
    }

    public function show()
    //  Truyền tham số $id vào show($id) là sai
    // chỉ viết public function show()
    {
        $title = "Chi tiết danh mục";
        $view = "categories/show";
       
        //  Lỗi too few arguments do thiếu $_GET['id]
        //  Khắc phục
        // $_GET['id'] = $id; Lỗi viết ngược

        $id = $_GET['id'];
        $category = $this->modelCategory->find($id);

        require_once PATH_VIEW_MAIN;
    }
}