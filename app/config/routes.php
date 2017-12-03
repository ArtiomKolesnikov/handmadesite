<?php
return [
    'users/([a-z]+)/([0-9]+)' => 'UserController@viewByRoleAndId@$1@$2',
    'users/([0-9]+)' => 'UserController@viewById@$1',
    'users' => 'UserController@index',
    'cars' => 'CarController@carList',
    '' => 'SiteController@index',
];