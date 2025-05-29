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
        $categories = $this->modelCategory->getAllCategory();
        echo "<pre/>";
        debug($categories);
    }
}