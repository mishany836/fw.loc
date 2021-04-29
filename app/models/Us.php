<?php


namespace app\models;


use fw\core\base\Model;
use fw\core\base\Controller;

class Us extends Model
{
    public $table = 'pages';

    public function getAboutUs($id){
        $sql = "SELECT * FROM {$this->table} WHERE `id` = ?";
        return $this->query($sql, [$id]);
    }
}