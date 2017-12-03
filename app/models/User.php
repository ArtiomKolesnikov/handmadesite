<?php
class User
{
    public static function getByRoleAndId($role,$id)
    {
        $db = DB::getConnection();
        $user = $db->query("SELECT name FROM users WHERE id = $id AND role = '$role' ;");
        $user->setFetchMode(PDO::FETCH_ASSOC);
        return $user->fetchAll();
    }

    public static function getById($id)
    {
        $db = DB::getConnection();
        $user = $db->query("SELECT * FROM users WHERE id = $id;");
        $user->setFetchMode(PDO::FETCH_ASSOC);
        return $user->fetchAll();
    }

    public static function getList()
    {
        $db = DB::getConnection();
        $user = $db->query("SELECT * FROM users ;");
        $user->setFetchMode(PDO::FETCH_ASSOC);
        return $user->fetchAll();
    }
}