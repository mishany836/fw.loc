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
       $about = new About;

        $lang = (App::$app->getProperty('lang')['code']);
        $total = \R::count('posts', 'lang_code = ?', [$lang]);
        App::$app->setProperty('langs', Language::getLanguages());
        App::$app->setProperty('lang', Language::getLanguage(App::$app->getProperty('langs')));

        $total = \R::count('about');
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 3;

        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        $posts = \R::findAll('posts', "lang_code = ? LIMIT $start, $perpage", [$lang]); //получаем запрос к базе данных
        View::setMeta('About :: Главная страница', 'Описание страницы', 'Ключевые слова');

        $this->set(compact('title', 'posts', 'pagination', 'total'));

    }
    public function testAction()
    {

    }
}