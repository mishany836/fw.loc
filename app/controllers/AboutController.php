<?php

namespace app\controllers;


use app\models\About;
use fw\core\App;
use fw\core\base\View;
use fw\Libs\Pagination;
use fw\widgets\language\Language;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class AboutController extends AppController
{
    public $layout = 'about';

    public function indexAction()
    {
        $id = intval($this->route);
       $about = new About;
       $result = \R::findAll('pages', "WHERE id = 2", [$id]); //получаем запрос к базе данных
        $this->set(['pages' => $result]);

    }

}