<?php
    namespace app\controllers;

use app\models\Main;
use vendor\core\App;

/**
 * различные методы для получения запросов
 * и работы с базой данных
 * Class MainController
 * @package app\controllers
 */
class MainController extends AppController
{
   // public $layout = 'main';

    public function indexAction()
    {
        App::$app->getList();
        //$this->layout = false;
    //$this->layout = 'main'; // default стили по умолчанию
    //$this->view = 'test';
        $model = new Main;
        $posts = \R::findAll('posts');
        App::$app->cache->set('posts', $posts);
        echo date('Y-m-d H:i', time());
        echo '<br>';
        echo date('Y-m-d H:i', );
        $post = \R::findOne('posts', 'id = 1');
        //debug($post);
      $menu = $this->menu;
        $title = 'PAGE TITLE';
        $this->setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
       // $this->setMeta($post->title, $post->description, $post->keywords);
        $meta = $this->meta;
        $this->set(compact('title', 'posts', 'menu', 'meta'));
    }
    public function testAction(){

    $this->layout = 'test';
    }
}












