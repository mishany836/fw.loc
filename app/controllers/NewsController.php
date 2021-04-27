<?php


namespace app\controllers;


use app\models\News;

class NewsController extends AppController
{   public $layout = 'details';

    public function viewAction()
    {
        $id = intval($this->route['id']);
        $news = new News();
            $result = \R::findOne('posts', "id = ?", [$id]);
        $this->set( ['posts'=> $result]);
    }

}














