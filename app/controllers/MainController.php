<?php
    namespace app\controllers;

use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use fw\Libs\Pagination;
use fw\widgets\language\Language;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * различные методы для получения запросов
 * и работы с базой данных
 * Class MainController
 * @package app\controllers
 */
class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Main;

        $lang = (App::$app->getProperty('lang')['code']);
         $total = \R::count('posts', 'lang_code = ?', [$lang]);
        App::$app->setProperty('langs', Language::getLanguages());
        App::$app->setProperty('lang', Language::getLanguage(App::$app->getProperty('langs')));

        $total = \R::count('posts');
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 3;

        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        $posts = \R::findAll('posts', "lang_code = ? LIMIT $start, $perpage", [$lang]); //получаем запрос к базе данных
        View::setMeta('Blog :: Главная страница', 'Описание страницы', 'Ключевые слова');

        $this->set(compact('title', 'posts', 'pagination', 'total'));


    }

    public function testAction(){

        if ($this->isAjax()) {
            $model = new Main;
            $post = \R::findOne('posts', "id = {$_POST['id']}");
            $this->loadView('_test', compact('post'));
        die;
        }
        echo 222;
    }
}












