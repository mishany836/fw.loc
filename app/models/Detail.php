<?php


namespace app\models;


use fw\core\base\Model;
use fw\core\base\Controller;
class Detail extends Model
{
    public $table = 'posts';
    public function getNews($id){
        $sql = " SELECT * FROM  {$this->table} WHERE `id` = ?";
        return $this->query($sql, [$id]);
    }
}




























