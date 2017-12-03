<?php
include_once ROOT . 'app/models/User.php';
class UserController
{
    public function index()
    {
        $users = User::getList();
        require_once ROOT . 'app/views/user/allUsers.php';
        return true;

    }

    public function viewByRoleAndId($role, $id)
    {
        echo '<pre>';
        var_dump(User::getByRoleAndId($role,$id));
        echo '</pre>';
        return true;
    }

    public function viewById($id)
    {
        echo '<pre>';
        var_dump(User::getById($id));
        echo '</pre>';
        return true;
    }


}