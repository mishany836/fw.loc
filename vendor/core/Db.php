<?php


namespace vendor\core;

use R;

class Db
{
    protected $pdo;
    protected static $instance;
    public static $countSql =0;
    public static $queries = [];

    protected function __construct()
    {
        $db = require ROOT . '/config/config_db.php';
        require LIBS . '/rb.php';
        \R::setup($db['dsn'], $db['user'], $db['pass']); // соединение с BD
        \R::freeze(true); // запрещаем изменять структуру базы на лету (ORM - redBeens)
 //       R::fancyDebug(TRUE);
//        $options = [
//            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // вовращает ошибки
//            \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC, // вовращает массив
//        ];
//        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);

    }

    public static function instance(){
        if (self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @param $sql
     * @return bool
     */
//    public function execute($sql, $params = []){
//        self::$countSql++;
//        self::$queries = $sql;
//        $stmt = $this->pdo->prepare($sql);
//        return $stmt->execute($params);
//    }
//
//    public function query($sql, $params = []){
//        self::$countSql++;
//        self::$queries = $sql;
//        $stmt = $this->pdo->prepare($sql);
//        $res = $stmt->execute($params);
//        if ($res !== false){
//            return $stmt->fetchAll();
//        }
//        return [];
//    }
}

















