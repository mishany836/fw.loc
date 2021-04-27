<?php


namespace app\models;


use fw\core\base\Model;
use fw\core\base\Controller;
class News extends Model
{
    public $table = 'posts';
public function getNews($id){
    $sql = " SELECT * FROM  `posts` WHERE `id` = ?";
    return $this->query($sql, [$id]);
    }
}























