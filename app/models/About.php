<?php


namespace app\models;


use fw\core\base\Model;

class About extends Model
{
    public $table = 'pages';


    public function getNewsByCategory($id){
        $sql = \R::findOne('pages', " id = ?", [$id]);
        return $this->query($sql, [$id]);
    }
}