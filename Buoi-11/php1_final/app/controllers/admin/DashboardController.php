<?php

class DashboardController
{
    public function index() 
    {
        $title = 'Admin Dashboard';
        $view = 'dashboard';
        
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}