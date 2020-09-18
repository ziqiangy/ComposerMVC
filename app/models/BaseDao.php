<?php


namespace models;

use Medoo\Medoo;
class BaseDao extends Medoo
{
    function __construct(){
        $options = [
            'database_type' => 'mysql',
            'database_name' => 'lmonkey',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'prefix' => 'ew_',
        ];
            parent::__construct($options);
    }
}