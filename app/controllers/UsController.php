<?php


namespace app\controllers;

use app\models\Us;
class UsController extends AppController
{
    public $layout = 'about';

    public function viewAction()
    {
        $us = new Us();
        $us = \R::findAll('pages');
        $result = $us;
        $this->set(['pages' => $result]);
    }
}














