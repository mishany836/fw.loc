<?php


namespace app\models;


use fw\core\base\Model;
use fw\core\base\Controller;

class Service extends Model
{
    public $table = 'posts';

   public function getService($id){
       $sql = " SELECT * FROM {$this->table} WHERE `id` = ?";
        return $this->query($sql, [$id]);

   }
}