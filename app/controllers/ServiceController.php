<?php


namespace app\controllers;

use app\models\Service;

class ServiceController extends AppController
{
    public $layout = 'service';

    public function indexAction()
    {
//       debug($this->route);
        $service = new Service();
       $service = \R::findAll('posts');
        $arNews = $service;
       $this->set(['service' => $arNews]);
    }
}
