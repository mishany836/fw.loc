<?php


namespace app\controllers;




use app\models\Detail;
use app\models\Service;

class DetailController extends AppController
{   public $layout = 'details';

        public function viewAction(){
      $id = intval($this->route['id']);
      $detail = new Detail();
      $result = \R::findOne('posts', "id = ?", [$id]);
      $this->set(['posts' => $result]);
        }

}





































