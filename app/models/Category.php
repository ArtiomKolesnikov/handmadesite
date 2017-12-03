<?php

class Category
{
    public static function getCategoryList()
    {
        $db = DB::getConnection();
        $categories = $db->query("SELECT * FROM category ORDER BY sort_order ASC;");
        $categories->setFetchMode(PDO::FETCH_ASSOC);
        return $categories->fetchAll();
    }
}