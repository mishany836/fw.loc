<?php


namespace vendor\core\base;

use vendor\core\Db;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $pk = 'id';

    public function __construct()
    {
       $this->pdo = Db::instance();
    }

    /**
     * обертка метода (запроса ) execute через класс(class Db)
     * @param $sql
     * @return mixed
     **/
    public function query($sql){
        return $this->pdo->execute($sql);
    }

    /**
     * выбрать все из бд
     * @return mixed
     **/
    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    /**
     * делаем выборку из бд по одному какомуто значению
     * @param $id
     * @param string $field
     * @return array
     */
    public function findOne($id, $field = ''){
        $field = $field ?: $this->pk;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->query($sql, [$id]);
    }

    /**
     * @param $sql
     * @param array $params
     * @return array
     */
    public function findBySql($sql, $params = []){
        return $this->pdo->query($sql, $params);
    }
    public function findLike($str, $field, $table = ''){
        $table = $table ?: $this->table;
        $sql = "SELECT * FROM $table WHERE $field LIKE ?";
        return $this->pdo->query($sql, ['%' . $str . '%']);
    }
}




















