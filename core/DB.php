<?php
class DB
{
    public static function connect()
    {
        $paramsPath ='./core/db_params.php';
        $params = include($paramsPath);
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        //print_r($db -> errorInfo());
        $db->exec("set names utf8");

        return $db;
    }
}