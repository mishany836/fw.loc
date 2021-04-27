<?php


namespace app\models;


use fw\core\base\Model;

class About extends Model
{
    public $table = 'posts';


    public function getNewsByCategory($categoryId){
        $sql = \R::findAll('posts', ' WHERE category_id = ?');
        return $this->query($sql, [$categoryId]);
    }
}