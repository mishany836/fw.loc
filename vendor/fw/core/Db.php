<?php


namespace fw\core;



class Db
{
     use TSingleton;// trait - для избежания дублирования кода

    protected $pdo;
   // protected static $instance;
    public static $countSql = 0;
    public static $queries = [];

    protected function __construct()
    {
        $db = require ROOT . '/config/config_db.php';
        require LIBS . '/rb.php';
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        \R::freeze(true);
    }

}

















