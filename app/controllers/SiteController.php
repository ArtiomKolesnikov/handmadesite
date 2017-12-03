<?php
include_once ROOT . 'app/models/Category.php';
class SiteController
{
    public function index()
    {
        $categories = Category::getCategoryList();
        require_once ROOT . 'app/views/site/main.php';
        return true;
    }
}